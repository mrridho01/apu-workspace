<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SprecherFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'path',
        'spercher_id'
    ];

    public function sprecher()
    {
        return $this->belongsTo(Sprecher::class);
    }
}
