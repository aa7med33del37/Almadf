<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerImage extends Model
{
    use HasFactory;
    protected $table = "worker_images";
    protected $fillable = [
        'worker_id',
        'image',
    ];
}
