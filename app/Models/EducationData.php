<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationData extends Model
{
    protected $fillable = [
        'role',
        'company',
        'description',
        'from',
        'to',
    ];
}
