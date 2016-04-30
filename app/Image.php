<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Report;

class Image extends Model
{
    protected $fillable = ['image_path', 'report_id'];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
