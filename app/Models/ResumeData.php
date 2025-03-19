<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeData extends Model
{
    /** @use HasFactory<\Database\Factories\AboutDataFactory> */
    use HasFactory;

    protected $fillable = [
        'role',
        'company',
        'description',
        'from',
        'to',
    ];
}
