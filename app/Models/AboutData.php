<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutData extends Model
{
    /** @use HasFactory<\Database\Factories\AboutDataFactory> */
    use HasFactory;

    protected $fillable = ['about_text'];
}
