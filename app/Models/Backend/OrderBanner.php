<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBanner extends Model
{
    use HasFactory;
    protected $table = 'order_banners';
    protected $fillable =
    [
        'title', 'image', 'youtube',
    ];
}
