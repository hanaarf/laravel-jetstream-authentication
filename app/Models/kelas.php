<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $fillable = [
        'name','gurubk_id','walas_id'
    ];

    public function guru(){
        return $this->belongsTo(guru::class, 'gurubk_id', 'id');
    }

    public function walas(){
        return $this->belongsTo(walas::class, 'walas_id', 'id');
    }

    public function siswa(){
        return $this->hasMany(siswa::class, 'kelas_id', 'id');
    }

    // public function murid(){
    //     return $this->hasMany(walas::class, 'kelas_id', 'id');
    // }
}
