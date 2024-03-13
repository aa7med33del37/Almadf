<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainBanner extends Model
{
    use HasFactory;
    protected $table = 'main_banners';
    protected $fillable =
    [
        'subTitle',
        'title',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'button_text',
        'button_link',
    ];
}
