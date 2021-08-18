<?php

namespace App\Models;

use App\Events\ChatReceveid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'user_id',
        'read_at'
    ];

    protected $dispatchesEvents = [
        'saved' => ChatReceveid::class,
    ];

    protected $with = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
