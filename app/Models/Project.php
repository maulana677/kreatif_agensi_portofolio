<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cover',
        'about',
        'projectCategory'
    ];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class, 'projectCategory_id', 'id');
    }
}
