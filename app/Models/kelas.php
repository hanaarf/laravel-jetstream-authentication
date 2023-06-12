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
 

    public function siswa(){
        return $this->hasMany(siswa::class);
    }

    public function walas()
    {
        return $this->belongsTo(walas::class);
    }


    //baru
    public function guru1()
    {
        return $this->belongsTo(guru::class);
    }

    public function walas1()
    {
        return $this->belongsTo(walas::class);
    }

    public function siswa1()
    {
        return $this->hasMany(siswa::class);
    }


    //barubgt
    public function guru2()
    {
        return $this->belongsTo(guru::class);
    }

    public function walas2()
    {
        return $this->belongsTo(walas::class);
    }

    public function siswa2()
    {
        return $this->hasMany(siswa::class);
    }


    //gurupk
    public function guru3()
    {
        return $this->belongsTo(guru::class);
    }

    public function walas3()
    {
        return $this->belongsTo(walas::class);
    }

    public function siswa3()
    {
        return $this->hasMany(siswa::class);
    }


   
    //11
    public function siswa5()
    {
        return $this->hasMany(siswa::class, 'kelas_id');
    }

    public function guru5()
    {
        return $this->belongsTo(guru::class, 'guru_id');
    }

    public function walas5()
    {
        return $this->belongsTo(walas::class, 'walas_id');
    }

    //13
    public function guru7()
    {
        return $this->belongsTo(guru::class, 'gurubk_id');
    }

    public function walas7()
    {
        return $this->belongsTo(walas::class, 'walas_id');
    }

    public function siswa7()
    {
        return $this->hasMany(siswa::class, 'kelas_id');
    }
}
