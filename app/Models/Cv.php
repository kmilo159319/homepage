<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'pdfurl',
        'upload_or_update'=> 'datetime',
        'user_id'
    ];
}
