<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\PageRequest;
use Modules\Admin\Models\Page;
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session;
use Route;
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use Modules\Admin\Helpers\Helper as Helper;
use Response;

/**
 * Class AdminController
 */
class PageController extends Controller {

    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct() {
        $this->middleware('admin');
        View::share('viewPage', 'product');
        View::share('helper',new Helper);
        $this->record_per_page = Config::get('app.record_per_page');
    }

     
    /*
     * Dashboard
     * */

    public function index( \Modules\Admin\Models\Page $page,  Request $request) 
    { 
         
        if ($request->ajax()) {
            $id = $request->get('id');
            $status = $request->get('status');
            $page = Page::find($id);
            $s = ($status == 1) ? $status = 0 : $status = 1;
            $page->status = $s;
            $page->save();
            echo $s;
            exit();
        }
        
        $page_title = 'Page';
        $page_action = 'View Page'; 
        $pages = $page->orderBy('id','desc')->Paginate($this->record_per_page);
        
        return view('packages::page.index', compact('pages', 'page_title', 'page_action'));
   
    }

    /*
     * create  method
     * */

    public function create(\Modules\Admin\Models\Page $page) 
    {
        $page_title = 'Page';
        $page_action = 'Create Page'; 
        return view('packages::page.create', compact('page', 'page_title', 'page_action'));
     }

    /*
     * Save Group method
     * */

    public function store(\Modules\Admin\Models\Page $page,PageRequest $request) 
    {
            //dd($page);
            $page->page_title      =   $request->get('page_title');

            $page->page_sub_title   =   $request->get('page_sub_title');

            $page->page_content        =   $request->get('description');
            //dd($page->save());
            $page->save(); 
        return Redirect::to(route('page'))
                            ->with('flash_alert_notice', 'New Page was successfully created !');
    }
    /*
     * Edit Group method
     * @param 
     * object : $category
     * */

    public function edit(\Modules\Admin\Models\Page $page) {

        $page_title = 'Page';
        $page_action = 'Show Page'; 

        return view('packages::page.edit', compact( 'page', 'page_title', 'page_action'));
    }

    public function update(PageRequest $request, \Modules\Admin\Models\Page $page) 
    {
            $page->page_title      =   $request->get('page_title');
            $page->page_sub_title   =   $request->get('page_sub_title');
            $page->page_content        =   $request->get('description');
            $page->save(); 
        
        return Redirect::to(route('page'))
                        ->with('flash_alert_notice', 'Page was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy(\Modules\Admin\Models\Page $page) {
        
        Page::where('id',$page->id)->delete();

        return Redirect::to(route('page'))
                        ->with('flash_alert_notice', 'Page was successfully deleted!');
    }

    public function show(\Modules\Admin\Models\Page $page) {
        
    }

}
