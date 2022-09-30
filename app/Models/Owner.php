<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
=======
use APP\Models\Shop;
>>>>>>> 6e064b5431680263acdd0d14ea0cac0a252ac368

class Owner extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======

    public function shop() 
    {
        return $this->hasOne(Shop::class);
    }
>>>>>>> 6e064b5431680263acdd0d14ea0cac0a252ac368
}