<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Image;

class ImageWebController extends Controller
{
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

    	$path = storage_path("app/uploads/{$file_id}");
    	
    	if (file_exists($path)) {
    		return response()->file($path, ['Content-Type' => 'image/jpeg']);
    	}
    	
    	abort(404);
    }

    public function postMakeFile(Request $request)
    {
    	$user = Auth::user();

    	if ($user === null || $user->role !== 'admin') {
    		abort(403);
    	}

    	$file = Image::create(['is_private' => $request->is_private]);
    	$file_id = $file->custom_id;
    	$path = storage_path("app/uploads/{$file_id}");
    	
    	$file_data = '?';
    	file_put_contents($path, $file_data);

    	return redirect()->back()->with('msg_success', "File created successfully!");
    }
}
