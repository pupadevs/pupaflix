<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'season_id',
    ];

    public function season(){
        return $this->belongsTo(Season::class);
    }
}
