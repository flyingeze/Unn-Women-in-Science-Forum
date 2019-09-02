<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    //Table Name
    protected $table ='f_a_q_s';
    //Primary Key
    public $primaryKey = 'faq_id';
    //Timestamps
    public $timestamps= true;
}
