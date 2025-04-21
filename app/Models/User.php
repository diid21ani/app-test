<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PasswordReset;
//use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        // 'firstname',
        // 'lastname',
        'email',
        'password',
        'status',
        'role',
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


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'password' => false,
    ];


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {   
        $info = ['token'=>$token,'user'=>$this];
        Mail::to($this->email,$this->name)->send(new ResetPassword($info));
        //$this->notify(new PasswordReset($token));
    }

    /**
     * Send the password reset notification.
     *
     * @param  void
     * @return array 
     */

    public function getUserRights(){
        return $this->hasMany(UserRights::class, 'user_id', 'id');
    }

    public function userRight(){
        return $this->hasMany(UserRights::class, 'user_id', 'id');   
    }
}
