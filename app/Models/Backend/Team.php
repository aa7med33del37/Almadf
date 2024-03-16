<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = "teams";
    protected $fillable = [
        'name',
        'job',
        'image',
        'status',
    ];
}
