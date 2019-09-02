<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function ScopeWhereSlug($query, $slug){
        return $query->where('topic_slug', $slug);
    }
    //Table Name
    protected $table ='topics';
    //Primary Key
    public $primaryKey = 'topic_id';
    //Timestamps
    public $timestamps= true;
}
