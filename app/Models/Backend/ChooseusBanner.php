<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseusBanner extends Model
{
    use HasFactory;
    protected $table = 'chooseus_banners';
    protected $fillable =
    [
        'subTitle', 'title', 'message','goals', 'vision', 'image',
    ];
}
