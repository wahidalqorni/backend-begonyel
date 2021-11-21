<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    //untuk mengizinkan field apa saja yang bisa diinsert ke tabel di database
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    //guarded melindungi field agar tidak bisa di modifikasi dari luar
    // protected $guarded = [
    //     'id'
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

    //menyembunyikan field" yg tidak ingin ditampilkan saat distribusi data
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
