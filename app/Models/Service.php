<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'project_id',
        'description'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function serviceFiles()
    {
        return $this->hasMany(ServiceFile::class);
    }
}
