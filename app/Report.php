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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getFormDataAttribute($value)
    {
        return json_decode($value);
    }

    public function isChosen($key, $value)
    {
        if (isset($this->form_data->$key)) {
            return $this->form_data->$key == $value ? 'chosen' : null;
        }

        return null;
    }
}
