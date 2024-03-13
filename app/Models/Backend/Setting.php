<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable = [
        'website_name',
        'about',
        'logo',
        'favicon',
        'phone',
        'whatsapp',
        'email',
        'address',
        'facebook',
        'x',
        'instagram',
        'youtube',
        'linkedin',
    ];
}
