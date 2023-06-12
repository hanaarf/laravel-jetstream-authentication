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
}
