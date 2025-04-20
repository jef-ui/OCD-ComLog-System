<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = [

        'fund_cluster',
        'division',
        'agency_office',
        'unit',
        'description',
        'quantity',
        'amount_utilized',
        'balance',
        'invoice_number',
        'plate_number',
        'car_type',
        'purpose',
        'requested_by',
        'received_by',
        'position_designation',
        'date',

    ];

     // Define any custom date formats (if needed)
     //protected $dates = ['date'];  // This ensures that the `date` field is treated as a Carbon instance

     // Optional: Add any relationships if necessary
}
