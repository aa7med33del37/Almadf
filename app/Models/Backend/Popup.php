<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;
    protected $table = 'popups';
    protected $fillable =
    [
        'popup_title',
        'popup_text',
        'status',
    ];
}
