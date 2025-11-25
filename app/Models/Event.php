<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'date',
        'city',
        'private',
        'description',
        'image',
        'items',
        'user_id',
    ];

    protected $casts = [
        'items' => 'array',
        'date'  => 'datetime',
    ];

    protected $dates = ['date'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
