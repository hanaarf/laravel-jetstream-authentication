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
}
