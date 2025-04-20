<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Requisition;


use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function index (){
        $requisitions = Requisition::all();
        return view ('requisitions.index', ['requisitions' => $requisitions]);
    }

    public function create (){
        return view('requisitions.create');
    }

    public function store (Request $request){
        $data = $request->validate([

            'fund_cluster' => 'required',
            'division' => 'required',
            'agency_office' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'amount_utilized' => 'required|numeric',
            'balance' => 'required|numeric',
            'invoice_number' => 'required',
            'plate_number' => 'required',
            'car_type' => 'required',
            'purpose' => 'required',
            'requested_by' => 'required',
            'received_by' => 'required',
            'position_designation' => 'required',
            'date' => 'required|date'

        ]);

        $card = Requisition::create($data);

        //this card data in session for preview
        session(['card' => $card]);

        return redirect(route('requisition.index'))->with('success', 'RIS Data Successfully Added');
        
    }

    public function preview(Requisition $requisition)
{
    return view('requisitions.preview', compact('requisition'));
}

}
