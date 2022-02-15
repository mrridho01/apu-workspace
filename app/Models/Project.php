<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'category',
        'start_date',
        'end_date',
        'description',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }

    public function projectPhotos()
    {
        return $this->hasMany(ProjectPhoto::class);
    }

    public function projectVideos()
    {
        return $this->hasMany(ProjectVideo::class);
    }

    public function projectFiles()
    {
        return $this->hasMany(ProjectFile::class);
    }

    public function projectDrawings()
    {
        return $this->hasMany(ProjectDrawing::class);
    }

    public function recorders()
    {
        return $this->hasMany(Recorder::class);
    }

    public function sprechers()
    {
        return $this->hasMany(Sprecher::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
