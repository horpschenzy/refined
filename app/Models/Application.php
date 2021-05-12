<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $guarded = [];
    /**
     * Get the user associated with the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
