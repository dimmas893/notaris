<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;
    protected $table = 'persyaratan';
    protected $fillable = [
        'nama_persyaratan',
        'entry_data',
        'upload_data',
        'status'
    ];
}
