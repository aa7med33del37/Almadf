<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewsBanner extends Model
{
    use HasFactory;
    protected $table = 'reviews_banners';
    protected $fillable =
    [
        'subTitle', 'title', 'image', 'client1', 'job1', 'message1', 'rating1', 'client2', 'job2', 'message2', 'rating2', 'client3', 'job3', 'message3', 'rating3',
    ];
}
