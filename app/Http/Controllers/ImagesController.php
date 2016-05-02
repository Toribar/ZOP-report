<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($file = $request->file('image')) {
            $extension = $file->getClientOriginalExtension();
            $filename = str_random() . '.' . strtolower($extension);
            $file->move(public_path('uploads'), $filename);

            Image::create([
                'report_id' => $request->report_id,
                'image_path' => $filename,
            ]);
        }

        return redirect()->back();
    }
}
