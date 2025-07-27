<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['title', 'start', 'end'];
}
