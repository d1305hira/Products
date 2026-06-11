<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','tel','other_content'];

    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }

    use HasFactory;
}
