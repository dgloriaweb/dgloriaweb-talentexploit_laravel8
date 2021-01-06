<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Secret extends Model
{
    use HasFactory;

    protected $guarded = []; 

    /*** relationships ***/
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
