<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sprecher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'project_id',
        'type'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function sprecherFiles()
    {
        return $this->hasMany(SprecherFile::class);
    }
}
