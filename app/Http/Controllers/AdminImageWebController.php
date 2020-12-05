<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Album;
use App\Models\Image;

class AdminImageWebController extends Controller
{
	public function getFileSummary($file_id)
	{
	    $image = Image::where('custom_id', $file_id)->first();
	    if ($image === null) {abort(404);}

		$data = [
			'image' => $image,
		];

		return view('file-summary', $data);
	}

	public function postMakeFile(Request $request)
	{
	    if ($request->file === null) {
	        return redirect()->back()->with(
	            'msg_failure', "No file submitted"
	        );
	    }

		if ($request->is_private === null) {
			$request->is_private = 0;
		}

		if ($request->album_id === null) {abort(500);}
	    $extension = $request->file->extension();
		
	    $file = Image::create([
	    	'album_id' => $request->album_id,
	        'file_type' => $extension,
	        'is_private' => $request->is_private,
	    ]);
		
	    $file_id = $file->custom_id;
		$request->file->storeAs('uploads', "{$file_id}.{$extension}");

		return redirect()->back()->with(
			'msg_success', "Image created successfully"
		);
	}
}
