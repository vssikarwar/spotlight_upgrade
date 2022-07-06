<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
    $customers = Customers::paginate(10);
    return view('backend.support.customers.index')->with('customers',$customers);
    }

    public function linkedAccount(Request $request){
        if( $request->isMethod('post')){
            $userid= $request->all();
                $request->session()->put('user_id', $userid['id']);
          
            return view('backend.support.customers.linked');
        }
        
    }

   
    
}
