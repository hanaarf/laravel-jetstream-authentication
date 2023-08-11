<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'name','nisn','user_id','kelas_id','ttl','gender'
    ];

    public function kelasid(){
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }

    public function userid(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function petaKerawanan()
    // {
    //     return $this->hasMany(PetaKerawanan::class);
    // }


    //  baru
    public function user1()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas1()
    {
        return $this->belongsTo(kelas::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

   
     // walaspk
    public function kelas2()
    {
        return $this->belongsTo(kelas::class);
    }

    public function kerawanan2()
    {
        return $this->hasMany(petakerawanan::class, 'siswa_id');
    }


    //gurupk
    public function kelas3()
    {
        return $this->belongsTo(kelas::class);
    }

    public function walas3()
    {
        return $this->belongsTo(walas::class);
    }


    //tgl11
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function kerawanan()
    {
        return $this->hasMany(petakerawanan::class);
    }

    //12
    public function kelas5()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }
    //13
    public function kelas7()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function user7()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
   
}
