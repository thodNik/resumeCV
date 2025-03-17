<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CvPdf extends Model
{
    protected $fillable = ['file_path'];
    
    public static function boot(): void
    {
        parent::boot();

        static::deleting(function ($pdf) {
            Storage::disk('public')->delete($pdf->file_path);
        });
    }
}
