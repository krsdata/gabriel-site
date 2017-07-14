<?php
namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;  
use Illuminate\Foundation\Http\FormRequest;
use Response;

class Menu extends Model {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';
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
    protected $fillable = ['menu_title','status']; // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
