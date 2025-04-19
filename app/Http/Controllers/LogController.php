<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
    
        $logs = Log::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('received_date', 'like', "%{$search}%")
                      ->orWhere('received_time', 'like', "%{$search}%")
                      ->orWhere('name_of_sender', 'like', "%{$search}%")
                      ->orWhere('band', 'like', "%{$search}%")
                      ->orWhere('mode', 'like', "%{$search}%")
                      ->orWhere('signal_strength', 'like', "%{$search}%")
                      ->orWhere('name_of_receiver', 'like', "%{$search}%")
                      ->orWhere('notes_remarks', 'like', "%{$search}%");
                });
            })
            ->orderBy('updated_at', 'desc') // Shows recently added/updated logs first
            ->simplePaginate(10); // Use simplePaginate instead of paginate to remove arrows
    
        return view('logs.index', ['logs' => $logs, 'search' => $search]);
    }
    

    

    public function create(){
        return view('logs.create');
    }

    public function store(Request $request){

        $data = $request->validate([

        'received_date' => 'required|date',
        'received_time' => 'required',
        'name_of_sender' => 'required|string|max:255',
        'band' => 'required|in:LF,HF,VHF,UHF,WIFI,NETWORK',
        'mode' => 'required|in:AM,FM,SSB,DMR,UHF,WIFI,NETWORK',
        'signal_strength' => 'required|in:Excellent,Good,Fair,Poor',
        'name_of_receiver' => 'required|string|max:255',
        'notes_remarks' => 'required|in:Weather Update,Radio Check,Unit Movement,Incident Follow-up',

        ]);

        $radioLog = Log::create($data);

        return redirect(route('log.index'));

    }

    public function edit (Log $log){
        return view('logs.edit', ['log'=>$log]);

    }

    public function update (Log $log, Request $request){
        $data = $request->validate([

            'received_date' => 'required|date',
            'received_time' => 'required',
            'name_of_sender' => 'required|string|max:255',
            'band' => 'required|in:LF,HF,VHF,UHF,WIFI,NETWORK',
            'mode' => 'required|in:AM,FM,SSB,DMR,UHF,WIFI,NETWORK',
            'signal_strength' => 'required|in:Excellent,Good,Fair,Poor',
            'name_of_receiver' => 'required|string|max:255',
            'notes_remarks' => 'required|in:Weather Update,Radio Check,Unit Movement,Incident Follow-up',
    
            ]);


            $log->update($data);

            return redirect(route('log.index'))->with('success', 'Radio Logs Updated Successfully');
    }

    public function delete(Log $log){
        $log->delete();

        return redirect(route('log.index'))->with('success', 'Radio Logs Deleted Successfully');
    }

    

    
}
