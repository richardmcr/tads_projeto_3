<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function avaliacoes()
    {
        return $this->hasMany(Rating::class);
    }

    public function nivel()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'role_id',
        'blocked',
        'last_access_at',
        'avatar',
        'facebook',
        'instagram',
        'twitter',
        'twitch',
        'about',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Faz a verificação se o usuário é ADMIN
     */
    public function isAdmin()
    {
        if ($this->role_id === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Faz a verificação se o usuário está bloqueado
     */
    public function isBlocked()
    {
        if ($this->blocked === 1) {
            return true;
        } else {
            return false;
        }
    }
}
