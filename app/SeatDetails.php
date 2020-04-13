<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatDetails extends Model
{
    protected $guarded = ['id'];

    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
