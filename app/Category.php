<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Table Name
    protected $table ='categorys';
    //Primary Key
    public $primaryKey = 'cat_id';
    //Timestamps
    public $timestamps= true;
}
