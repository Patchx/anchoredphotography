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

    public function postDeleteFile(
        Request $request,
        $file_id
    ) {
        $user = Auth::user();

        // WIP
        if ($user === null || $user->role !== 'admin') {
            abort(403);
        }

        $image = Image::where('custom_id', $file_id)->first();
        if ($image === null) {abort(404);}

        $image->delete();
        $redirect_link = "/admin/album/" . $image->album_id;
        
        return redirect()->to($redirect_link)->with(
            'msg_success', "Image Deleted Successfully"
        );
    }
}
