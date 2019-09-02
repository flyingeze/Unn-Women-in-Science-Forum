<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //Table Name
    protected $table ='departments';
    //Primary Key
    public $primaryKey = 'department_id';
    //Timestamps
    public $timestamps= true;
}
