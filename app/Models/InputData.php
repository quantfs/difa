<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputData extends Model
{
    use HasFactory;

    protected $table = 'input_data';
    protected $guarded = false;
    protected $dates = ['installation_date_at'];

    protected $casts = [
        'documents' => 'array'
    ];
}
