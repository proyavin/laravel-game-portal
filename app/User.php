<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Gstt\Achievements\Achiever;

class User extends Authenticatable
{
    use Notifiable, Achiever;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_seen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function isAdmin() {
        return ($this->role->name == 'admin') ? true : false;
    }

    public function isModerator() {
        return ($this->role->name == 'moderator') ? true : false;
    }

    public function isAdminOrModerator() {
        return $this->isAdmin() || $this->isModerator();
    }

    public function getOnlineStatus() {

        $minutes = Carbon::parse($this->last_seen)->diffInMinutes(Carbon::now());

        if($minutes < 5) {
            return 'Онлайн';
        }else {
            return 'Был(а) в сети '.$minutes.' минут назад';
        }
    }
}
