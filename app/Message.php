<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'text', 'url'];

    public function user() {
        return $this->belongsTo('\App\User');
    }
}

// User::with('messages')->where(...)->get()
//
// User {
//     id: 123123
//     email: a@b.cc
//     messages [
//         Message {
//             id
//             text
//             ...
//         }
//     ]
// }
