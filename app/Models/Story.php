<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'date',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(\App\Models\User::class,'user_id','id');
    }
}
