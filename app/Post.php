<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //Table name
    protected $table = 'posts' ;
    //Primary key
    protected $primaryKey = 'id' ;
    //Timestmps
    public $timestamps = true ; 


}
