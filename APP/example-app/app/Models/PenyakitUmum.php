<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitUmum extends Model
{
    use HasFactory;

    protected $table = 'penyakit_umum';

    protected $fillable = [
        'image',
        'title',
        'description',
        'link',
    ];
}
