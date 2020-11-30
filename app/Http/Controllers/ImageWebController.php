<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Image;

class ImageWebController extends Controller
{
	// Need to not hardcode jpegs
	// 
    public function getFile($file_id)
    {
    	$image = Image::where('custom_id', $file_id)->first();
    	if ($image === null) {abort(404);}

    	$user = Auth::user();

    	if ($image->is_private) { // WIP
    		if ($user === null || $user->role !== 'admin') {
    			abort(404);
    		}
    	}

    	$path = storage_path("app/uploads/{$file_id}.jpeg");

    	if (file_exists($path)) {
    		return response()->file($path, ['Content-Type' => 'image/jpeg']);
    	}
    	
    	abort(404);
    }

    public function getFileSummary($file_id)
    {
    	$data = [
    		'file_id' => $file_id,
    	];

    	return view('file-summary', $data);
    }

    public function getTest()
    {
        return view('image-test');
    }

    // Need to not hardcode jpegs
    // --
    public function postMakeFile(Request $request)
    {
    	$user = Auth::user();

    	if ($user === null || $user->role !== 'admin') {
    		abort(403);
    	}

    	if ($request->is_private === null) {
    		$request->is_private = 0;
    	}

    	$file = Image::create(['is_private' => $request->is_private]);
    	$file_id = $file->custom_id;    	
    	$request->file->storeAs('uploads', "{$file_id}.jpeg");

    	return redirect()->to("/i/summary/{$file_id}");
    }
}
