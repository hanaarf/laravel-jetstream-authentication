<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskonseling extends Model
{
    use HasFactory;
    protected $table = 'jeniskonseling';

    protected $fillable = [
        'name'
    ];

    //13
    public function konselingPribadi7()
    {
        return $this->hasMany(konselingpribadi::class, 'jeniskonseling_id');
    }

    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }

    public function walas() {
        return $this->belongsTo(walas::class);
    }

    public function gurubk() {
        return $this->belongsTo(guru::class, 'gurubk_id');
    }

    public function jeniskonseling() {
        return $this->belongsTo(konselingpribadi::class);
    }
}
