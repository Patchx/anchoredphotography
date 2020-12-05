<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends AbstractModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_id',
        'name',
    ];

    // -----------------
    // - Relationships -
    // -----------------

    public function images()
    {
    	return Image::where('album_id', $this->custom_id)->get();
    }

    // --------------------
    // - Parent Overrides -
    // --------------------

    public function delete()
    {
    	$images = $this->images();

    	// Need to hydrate all these models so that actual server-file deletion takes place
    	// --
    	foreach ($images as $image) {
    		$image->delete();
    	}

        parent::delete();
    }
}
