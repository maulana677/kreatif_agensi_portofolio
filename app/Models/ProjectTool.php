<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTool extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'tool_id',
        'project_id'
    ];

    public function tools()
    {
        return $this->belongsTo(Tool::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
