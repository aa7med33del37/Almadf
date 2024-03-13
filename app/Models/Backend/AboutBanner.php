<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutBanner extends Model
{
    use HasFactory;
    protected $table = 'about_banners';
    protected $fillable =
    [
        'subTitle',
        'title',
        'description',
        'image1',
        'image2',
        'button_text',
        'button_link',
        'text1',
        'text2',
        'text3',
    ];
}
