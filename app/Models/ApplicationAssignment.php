<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationAssignment extends Model
{
    protected $guarded = [];
    /**
     * Get the user that owns the ApplicationAssignment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function applications()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }
}
