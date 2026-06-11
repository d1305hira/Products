<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'worktime_id',
        'date',
        'break_start',
        'break_end',
    ];
}
