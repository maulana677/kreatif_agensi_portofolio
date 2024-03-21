<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

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

    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'project_tools', 'project_id', 'tool_id')
            ->wherePivotNull('deleted_at')
            ->withPivot('id');
    }

    public function screenshots()
    {
        return $this->hasMany(ProjectScreenshot::class, 'project_id', 'id');
    }
}
