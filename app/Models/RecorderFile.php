<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecorderFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'path',
        'recorder_id'
    ];

    public function recorder()
    {
        return $this->belongsTo(Recorder::class);
    }
}
