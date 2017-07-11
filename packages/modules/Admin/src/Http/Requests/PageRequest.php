<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\Request; 
 

class PageRequest  extends Request {

    /**
     * The product validation rules.
     *
     * @return array
     */
    public function rules() { 
            switch ( $this->method() ) {
                case 'GET':
                case 'DELETE': {
                        return [ ];
                    }
                case 'POST': {
                        return [
                            'page_title'     => "required|unique:pages,page_title" ,  
                            'page_sub_title'  => 'required', 
                            'description'       => 'required',
                        ];
                    }
                case 'PUT':
                case 'PATCH': {
                    if ( $page = $this->page ) {

                        return [
                            'page_title'     => "required" ,  
                            'page_sub_title'  => 'required', 
                            'description'       => 'required',
                                            ];
                    }
                }
                default:break;
            }
        //}
    }

    /**
     * The
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}
