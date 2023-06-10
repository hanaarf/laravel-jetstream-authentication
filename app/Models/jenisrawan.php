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


    //baru
    public function kerawanan1()
    {
        return $this->hasMany(petakerawanan::class);
    }


    //barubgt
    public function kerawanan2()
    {
        return $this->hasMany(petakerawanan::class, 'jenisrawan_id');
    }
}
