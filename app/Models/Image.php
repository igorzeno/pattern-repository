<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'disk_path',
        'mime_type',
        'name',
        'size',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
