<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petakerawanan extends Model
{
    use HasFactory;
    protected $table = 'petakerawanan';

    protected $fillable = [
        'jenisrawan_id','siswa_id','walas_id','kesimpulan'
    ];

    // public function walas()
    // {
    //     return $this->belongsTo(walas::class, 'walas_id');
    // }

    // public function siswa()
    // {
    //     return $this->belongsTo(siswa::class, 'siswa_id');
    // }


    public function jenisrawanid(){
        return $this->belongsTo(jenisrawan::class, 'jenisrawan_id', 'id');
    }   

    public function siswaid(){
        return $this->belongsTo(siswa::class, 'siswa_id', 'id');
    }

    public function walasid(){
        return $this->belongsTo(walas::class, 'walas_id', 'id');
    }

    //baru
    public function siswa1()
    {
        return $this->belongsTo(siswa::class);
    }

    public function walas1()
    {
        return $this->belongsTo(walas::class);
    }

    public function jenisKerawanan1()
    {
        return $this->belongsTo(jenisrawan::class, 'jenisrawan_id');
    }



    //barubgt
    public function walikelas()
    {
        return $this->belongsTo(walas::class);
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
