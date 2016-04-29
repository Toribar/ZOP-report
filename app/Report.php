<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $casts = [
        'form_data' => 'json'
    ];

    protected $fillable = [
        'institution_number', 'object','location', 'cadaster', 'object_owner', 'form_data'
    ];

}
