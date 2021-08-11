<?php

namespace App\Models;

use App\Listeners\TestEventModel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $dispatchesEvents = [
    //     'retrieved' => TestEventModel::class,
    //     'creating' => TestEventModel::class,
    //     'created' => TestEventModel::class,
    //     'updating' => TestEventModel::class,
    //     'updated' => TestEventModel::class,
    //     'saving' => TestEventModel::class,
    //     'saved' => TestEventModel::class,
    //     'deleting' => TestEventModel::class,
    //     'deleted' => TestEventModel::class,
    //     'restoring' => TestEventModel::class,
    //     'restored' => TestEventModel::class,
    //     'replicating' => TestEventModel::class,

    // ];

    // protected static function booted()
    // {
    //     static::creating(function ($user) {
    //         die('creating');
    //         var_dump($user);

    //     });
    //     // static::retrieved(function ($user) {
    //     //     var_dump($user);
    //     // });
    // }
}
