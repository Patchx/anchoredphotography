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
            'images' => $album->images(),
		];

		return view('admins.view-album', $data);
	}

    public function getAlbumSearch(Request $request)
    {
        if ($request->search === null) {
            return redirect()->to('/dashboard');
        }

        $albums = Album::where(
            'name', 'like', '%' . $request->search . '%'
        )->get();

        if ($albums->count() < 1) {
            return redirect()->to('/dashboard');
        } elseif ($albums->count() === 1) {
            return redirect()->to('/admin/album/' . $albums->first()->custom_id);
        }

        $data = [
            'albums' => $albums,
        ];

        return view('admins.album-search', $data);
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

        $albums = Album::where(
            'name', 'like', '%' . $request->search_text . '%'
        )->get();

        if ($albums->count() < 1) {
            return redirect()->back()->with(
                'search_text_failure', "Album not found"
            );
        } elseif ($albums->count() === 1) {
            return redirect()->to('/admin/album/' . $albums->first()->custom_id);
        } else {
            $query = urlencode($request->search_text);
            return redirect()->to('/admin/album/search?search=' . $query);
        }
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
