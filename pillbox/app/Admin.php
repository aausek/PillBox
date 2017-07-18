<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //Table name
    protected $table = 'scripts';
    
    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

}
