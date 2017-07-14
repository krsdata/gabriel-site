<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\PageRequest;
use Modules\Admin\Models\Menu;
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
class MenuController extends Controller {

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

    public function index( \Modules\Admin\Models\Menu $menu,  Request $request) 
    { 
         
        if ($request->ajax()) {
            $id = $request->get('id');
            $status = $request->get('status');
            $page = Menu::find($id);
            $s = ($status == 1) ? $status = 0 : $status = 1;
            $menu->status = $s;
            $menu->save();
            echo $s;
            exit();
        }
        
        $page_title = 'Menu';
        $page_action = 'View Menu'; 
        $menus = $menu->orderBy('id','desc')->Paginate($this->record_per_page);
        
        return view('packages::menu.index', compact('menus', 'page_title', 'page_action'));
   
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

    public function update(PageRequest $request, \Modules\Admin\Models\Menu $menu) 
    {
            $menu->menu_title      =   $request->get('menu_title');
            $menu->status   =   $request->get('status');
            $menu->save(); 
        
        return Redirect::to(route('menu'))
                        ->with('flash_alert_notice', 'Menu was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy(\Modules\Admin\Models\Menu $menu) {
        
        Menu::where('id',$menu->id)->delete();

        return Redirect::to(route('menu'))
                        ->with('flash_alert_notice', 'Menu was successfully deleted!');
    }

    public function show(\Modules\Admin\Models\Menu $menu) {
        
    }

}
