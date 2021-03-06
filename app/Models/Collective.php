<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collective extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsTo(PostCollective::class);
    }
}
