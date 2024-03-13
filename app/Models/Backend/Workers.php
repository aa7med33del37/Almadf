<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    protected $table = "workers";
    protected $fillable = [
        'name',
        'age',
        'job',
        'country',
        'religion',
        'experience',
        'description',
        'long_description',
        'rating',
        'cv',
        'image',
        'status',
    ];
}
