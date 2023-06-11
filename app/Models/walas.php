<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walas extends Model
{
    use HasFactory;

    protected $table = 'walas';

    protected $fillable = [
        'name','ttl','user_id','nipd','gender'
    ];

    public function userid(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas(){
        return $this->hasMany(kelas::class, 'walas_id', 'id');
    }

    // public function user1()
    // {
    //     return $this->belongsTo(User::class);
    // }


    // baru
    public function user1()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas1()
    {
        return $this->hasOne(kelas::class);
    }

 

    // barubgt
    public function kelas2()
    {
        return $this->hasOne(kelas::class, 'walas_id');
    }

     public function kerawanan2()
    {
        return $this->hasMany(petakerawanan::class, 'walas_id');
    }
  
    //gurupk
    public function kelas3()
    {
        return $this->hasOne(kelas::class, 'walas_id');
    }

    public function siswa3()
    {
        return $this->hasMany(siswa::class, 'walas_id');
    }
   
    //guru11
    public function kelas5()
    {
        return $this->hasOne(kelas::class, 'walas_id');
    }
}
