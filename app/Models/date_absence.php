<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class date_absence extends Model
{
    public $timestamps = false; // Disable timestamps

    protected $guarded = [];
    use HasFactory;
}
