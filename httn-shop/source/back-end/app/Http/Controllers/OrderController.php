<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use Excel;
use Input;
use Storage;

class OrderController extends BaseController
{
    public function getListOrderOfTransaction(){
        $listOrder = DB::table('order')->get()->toArray();
        echo '<pre>'; print_r($listOrder); die;

        return view('index')
            ->with('list_order', $listOrder)
            ->with('page', 3);
    }
    
}
