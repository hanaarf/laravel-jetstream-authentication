<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konselingpribadi extends Model
{
    use HasFactory;
    protected $table = 'konselingpribadi';
    protected $fillable = [
        'jeniskonseling_id','siswa_id','gurubk_id','walas_id','status','tanggal','jam','tempat','hasil','deskripsi'
    ];

    public function jeniskonseling(){
        return $this->belongsTo(jeniskonseling::class, 'jeniskonseling_id', 'id');
    }

    


    //13
    public function siswa7()
    {
        return $this->belongsTo(siswa::class, 'siswa_id');
    }

    public function gurubk7()
    {
        return $this->belongsTo(guru::class, 'gurubk_id');
    }

    public function walas7()
    {
        return $this->belongsTo(walas::class, 'walas_id');
    }

    public function jenisKonseling7()
    {
        return $this->belongsTo(jeniskonseling::class, 'jeniskonseling_id');
    }

    public function siswaid(){
        return $this->belongsTo(siswa::class, 'siswa_id', 'id');
    }

    public function walasid(){
        return $this->belongsTo(walas::class, 'walas_id', 'id');
    }

    public function gurubkid(){
        return $this->belongsTo(guru::class, 'gurubk_id', 'id');
    }


    //tgl14
    public function siswa8()
    {
        return $this->belongsTo(siswa::class, 'siswa_id');
    }

    public function guruBK8()
    {
        return $this->belongsTo(guru::class, 'gurubk_id');
    }

    public function waliKelas8()
    {
        return $this->belongsTo(walas::class, 'walas_id');
    }

    public function jenisKonseling8()
    {
        return $this->belongsTo(jeniskonseling::class, 'jeniskonseling_id');
    }
}
