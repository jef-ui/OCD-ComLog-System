<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [

        'received_date',
        'received_time',
        'name_of_sender',
        'band',
        'mode',
        'signal_strength',
        'name_of_receiver',
        'notes_remarks'

    ];

    public $timestamps = true;
}
