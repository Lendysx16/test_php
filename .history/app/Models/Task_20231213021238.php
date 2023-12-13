<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $hidden = ['updated_at'];
    protected $casts = ['is_done' => 'boolean'];
    protected $fillable = [
        'name', 'surname', 'tg_id', 'text'
    ];
}
