<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HeadMember extends Model
{
    protected $table = 'head_member';
    public function user()
    {
        return $this->hasOne(User::class, 'id','head_id');
    }
}
