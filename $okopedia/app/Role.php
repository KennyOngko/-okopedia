<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Role extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}
