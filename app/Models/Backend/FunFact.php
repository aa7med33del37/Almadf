<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFact extends Model
{
    use HasFactory;
    protected $table = 'funfacts';
    protected $fillable =
    [
        'years',
        'years_desc',
        'clients',
        'clients_desc',
        'projects',
        'projects_desc',
    ];
}
