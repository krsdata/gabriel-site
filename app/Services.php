<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Services extends Authenticatable
{
   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['page_title','page_sub_title','page_content'];    
}
