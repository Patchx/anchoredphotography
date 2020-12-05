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

        $extension = $image->file_type;
    	$path = storage_path("app/uploads/{$file_id}.{$extension}");

    	if (file_exists($path)) {
    		return response()->file($path, ['Content-Type' => "image/{$extension}"]);
    	}
    	
    	abort(404);
    }

    public function getFileSummary($file_id)
    {
        $image = Image::where('custom_id', $file_id)->first();
        if ($image === null) {abort(404);}

    	$data = [
    		'file_id' => $file_id,
    	];

    	return view('file-summary', $data);
    }

    public function getTest()
    {
        return view('image-test');
    }

    public function postDeleteFile(
        Request $request,
        $file_id
    ) {
        $user = Auth::user();

        if ($user === null || $user->role !== 'admin') {
            abort(403);
        }

        $image = Image::where('custom_id', $file_id)->first();
        if ($image === null) {abort(404);}

        $image->delete();
        
        // WIP
        return redirect()->to('/i/test')->with(
            'msg_success', "Image Deleted Successfully"
        );
    }

    public function postMakeFile(Request $request)
    {
    	$user = Auth::user();

    	if ($user === null || $user->role !== 'admin') {
    		abort(403);
    	}

        if ($request->file === null) {
            return redirect()->back()->with(
                'msg_failure', "No file submitted"
            );
        }

    	if ($request->is_private === null) {
    		$request->is_private = 0;
    	}

        $extension = $request->file->extension();
    	
        $file = Image::create([
            'file_type' => $extension,
            'is_private' => $request->is_private
        ]);
    	
        $file_id = $file->custom_id;   
    	$request->file->storeAs('uploads', "{$file_id}.{$extension}");

    	return redirect()->to("/i/summary/{$file_id}");
    }
}
