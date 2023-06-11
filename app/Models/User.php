<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        ];

        public function siswa()
        {
            return $this->hasOne(siswa::class);
        }
    
        public function guru()
        {
            return $this->hasOne(guru::class);
        }
    
        public function wali_kelas()
        {
            return $this->hasOne(walas::class);
        }

        public function walas() 
        {
            return $this->hasOne(walas::class);
        }


        //wlaspk
        public function guru1()
        {
            return $this->hasOne(guru::class);
        }
    
        public function siswa1()
        {
            return $this->hasOne(siswa::class);
        }
    
        public function walas1()
        {
            return $this->hasOne(walas::class);
        }

        //gurubkpk
        public function guru3()
        {
            return $this->hasOne(guru::class);
        }

        public function siswa3()
        {
            return $this->hasOne(siswa::class);
        }

        public function walas3()
        {
            return $this->hasOne(walas::class);
        }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function hasRole($role)
    {
        return $this->role == $role;
    }   
}
