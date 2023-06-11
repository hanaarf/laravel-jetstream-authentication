<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $table = 'gurubk';

    protected $fillable = [
        'name','ttl','user_id','nipd','gender'
    ];

    public function userid(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas(){
        return $this->hasMany(kelas::class, 'gurubk_id', 'id');
    }

    // public function kelas1()
    // {
    //     return $this->hasOne(Kelas::class);
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
        return $this->hasOne(kelas::class, 'guru_id');
    }


    //gurupk
    public function user3()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas3()
    {
        return $this->hasOne(kelas::class, 'guru_id');
    }

    //12
    public function kelas5()
    {
        return $this->hasOne(kelas::class, 'guru_id');
    }


}
