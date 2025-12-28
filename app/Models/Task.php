<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
      'due_to' => 'date',
      'is_done' => 'boolean',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
