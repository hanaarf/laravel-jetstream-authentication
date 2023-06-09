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

    public function user1()
    {
        return $this->belongsTo(User::class);
    }

 
  
   
}
