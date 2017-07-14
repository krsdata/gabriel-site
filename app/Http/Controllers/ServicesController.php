<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Input;
use Validator;
use Auth;
use Form;
use Hash;
use View;
use URL;
use Route;
use Crypt;
use Response;
use App\Services;
use JWTAuth;
use Session; 

class ServicesController extends Controller
{

   	public function index(Request $request)
    {  		
    	//dd( $request->session()->get('current_user'));
         return view('welcome');
    }
}