<?php
namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;  
use Illuminate\Foundation\Http\FormRequest;
use Response;

class Page extends Model {

   
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
    protected $fillable = ['page_title','page_sub_title','page_content']; // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
