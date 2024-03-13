<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partnersBanner extends Model
{
    use HasFactory;
    protected $table = 'partners_banners';
    protected $fillable =
    [
        'image', 'status'
    ];
}
