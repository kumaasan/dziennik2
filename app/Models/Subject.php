<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function grade(){
        return $this->hasMany(Grade::class);
    }

}
