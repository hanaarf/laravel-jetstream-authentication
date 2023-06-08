<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisrawan extends Model
{
    use HasFactory;
    protected $table = 'jenisrawan';

    protected $fillable = [
        'name'
    ];
}
