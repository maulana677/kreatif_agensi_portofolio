<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
}
