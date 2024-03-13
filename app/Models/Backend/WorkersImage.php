<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class WorkersImage extends Model
{
    use HasFactory;
    protected $table = "workers_images";
    protected $fillable = [
        'workers_id',
        'image',
    ];
}
