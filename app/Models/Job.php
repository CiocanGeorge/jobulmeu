<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';

    protected $fillable = [
        'status',
        'title',
        'type',
        'location',
        'description',
        'slug',
        'expirationDate',
    ];
}
