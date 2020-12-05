<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends AbstractModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'custom_id',
        'is_private',
        'file_type',
    ];

    // --------------------
    // - Parent Overrides -
    // --------------------

    public function delete()
    {
        $extension = $this->file_type;
        $file_id = $this->custom_id;
        $path = storage_path("app/uploads/{$file_id}.{$extension}");
        unlink($path);

        parent::delete();
    }
}
