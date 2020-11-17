<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'role_id'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    function generatePassword ($password) {
        if($password != null) {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

    function edit($fields) {
        $this->fill($fields);
        $this->save();
    }
    static function add($fields) {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }
}
