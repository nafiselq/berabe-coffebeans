<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;
    // Spesifikasikan tabel yang digunakan model ini
    protected $table = 'aboutus';
    protected $fillable = [
        'title',
        'content'
    ];
}
