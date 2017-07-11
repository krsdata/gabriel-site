<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;  
use Modules\Admin\Models\About;
use View;
use Html;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request) {

     
        //View::share('category_name',$request->segment(2));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
       // $categories = Category::nested()->get();


        
        $data = About::with('category')->orderBy('id','asc')->get();
          return view('about',compact('html')); 

    } 
    
}
