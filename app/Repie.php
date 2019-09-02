<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repie extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
    //Table Name
    protected $table ='repies';
    //Primary Key
    public $primaryKey = 'reply_id';
    //Timestamps
    public $timestamps= true;
}
