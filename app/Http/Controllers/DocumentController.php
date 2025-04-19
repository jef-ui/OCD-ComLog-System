<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Document;
use illuminate\Support\Str; //Corrected
use function Ramsey\Uuid\v1;

class DocumentController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $documents = Document::query()
        ->when($search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('received_date', 'like', "%{$search}%")
                  ->orWhere('received_time', 'like', "%{$search}%")
                  ->orWhere('received_via', 'like', "%{$search}%")
                  ->orWhere('from_agency_office', 'like', "%{$search}%")
                  ->orWhere('type', 'like', "%{$search}%")
                  ->orWhere('subject_description', 'like', "%{$search}%")
                  ->orWhere('received_acknowledge_by', 'like', "%{$search}%")
                  ->orWhere('status_as_of_date', 'like', "%{$search}%")
                  ->orWhere('action_taken', 'like', "%{$search}%")
                  ->orWhere('concerned_section_personnel', 'like', "%{$search}%")
                  ->orWhere('deadline_of_compliance', 'like', "%{$search}%")
                  ->orWhere('compliance_status', 'like', "%{$search}%")
                  ->orWhere('file_path', 'like', "%{$search}%");
            });
        })
        ->orderBy('updated_at', 'desc')
        ->simplePaginate(10);

    return view('documents.index', compact('documents', 'search'));
}



    public function create(){
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'received_date' => 'required|date',
            'received_time' => 'required|date_format:H:i',
            'received_via' => 'required|in:email,fax,mail,lbc,jnt,jrsm_hand_carried,yahoomail,gmail',
            'from_agency_office' => 'required|string|max:255',
            'type' => 'required|in:Request,Invitation,Submission,For Information,For Compliance,Report,Complaint',
            'subject_description' => 'required|string',
            'received_acknowledge_by' => 'required|string|max:255',
            'status_as_of_date' => 'required|string|max:255',
            'action_taken' => 'required|string',
            'concerned_section_personnel' => 'required|string|max:255',
            'deadline_of_compliance' => 'required|date|after_or_equal:received_date',
            'compliance_status' => 'required|in:Pending,Completed,In Progress',
            'file_path' => 'required|file|mimes:pdf,mp4,avi,mov|max:20480',
        ]);

            // Store the uploaded file in the 'public/documents' directory
            $filePath = $request->file('file_path')->store('documents', 'public');
        
            // Save everything, including the file path, to the database
            $data['file_path'] = $filePath;
        
            Document::create($data);
        
            return redirect(route('document.index'))->with('success', 'Incomming Communication Logged Successfully');
    }

    
    public function show($id)
    {
        // Fetch the document by its ID
        $document = Document::findOrFail($id);
        // Return the view for displaying the document
        return view('documents.show', compact('document'));
    }

    public function edit(Document $document){

        // for dubug dd($document);

        return view('documents.edit',['document' => $document]);
        
    }

    public function update(Document $document, Request $request)
{
    $data = $request->validate([
        'received_date' => 'required|date',
        'received_time' => 'nullable|date_format:H:i',
        'received_via' => 'required|in:email,fax,mail,lbc,jnt,jrsm_hand_carried,yahoomail,gmail',
        'from_agency_office' => 'required|string|max:255',
        'type' => 'required|in:Request,Invitation,Submission,For Information,For Compliance,Report,Complaint',
        'subject_description' => 'required|string',
        'received_acknowledge_by' => 'required|string|max:255',
        'status_as_of_date' => 'required|string|max:255',
        'action_taken' => 'required|string',
        'concerned_section_personnel' => 'required|string|max:255',
        'deadline_of_compliance' => 'required|date|after_or_equal:received_date',
        'compliance_status' => 'required|in:Pending,Completed,In Progress',
        'file_path' => 'nullable|file|mimes:pdf,mp4,avi,mov|max:20480',
    ]);

    // Only update file_path if a new file is uploaded
    if ($request->hasFile('file_path')) {
        $filePath = $request->file('file_path')->store('documents', 'public');
        $data['file_path'] = $filePath;
    } else {
        // Keep existing file_path
        unset($data['file_path']);
    }

    // If received_time is not provided, keep the old one
    if (empty($data['received_time'])) {
        $data['received_time'] = $document->received_time;
    }

    $document->update($data);

    return redirect(route('document.index'))->with('success', 'Incoming Communication updated successfully');
}

    public function delete(Document $document){

        $document->delete();

        return redirect(route ('document.index'))->with('success', 'Incoming Communication Deleted Successfully');

    }

}
