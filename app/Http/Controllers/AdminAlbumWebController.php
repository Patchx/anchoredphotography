<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Album;

class AdminAlbumWebController extends Controller
{
	public function getAlbum($album_id)
	{
		$album = Album::where('custom_id', $album_id)->first();
		if ($album === null) {abort(404);}

		$data = [
			'album' => $album,
		];

		return view('admins.view-album', $data);
	}

	public function getCreateAlbum()
	{
		return view('admins.create-album');
	}

    public function postAlbumSearch(Request $request)
    {
		if ($request->search_text === null) {
			return redirect()->back()->with(
				'search_text_failure', "Search text cannot be blank"
			);
		}

		dd('Work in progress');
    }

    public function postCreateAlbum(Request $request)
    {    	
    	if ($request->album_name === null) {
    		return redirect()->back()->with(
    			'msg_failure', "Album Name is Required"
    		);
    	}

    	$album = Album::create(['name' => $request->album_name]);
    	$album_id = $album->custom_id;

    	return redirect()->to("/admin/album/{$album_id}");
    }

    public function postDeleteAlbum(
    	Request $request,
    	$album_id
    ) {
    	$album = Album::where('custom_id', $album_id)->first();
    	if ($album === null) {abort(404);}

    	$album->delete();

    	return redirect()->to('/dashboard')->with(
    	    'msg_success', "Album Deleted Successfully"
    	);
    }
}
