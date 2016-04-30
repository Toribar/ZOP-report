<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Image;

class Report extends Model
{
    protected $casts = [
        'form_data' => 'json'
    ];

    protected $fillable = [
        'institution_number', 'object','location', 'cadaster', 'object_owner', 'form_data'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
