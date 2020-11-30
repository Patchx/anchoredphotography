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
    ];
}
