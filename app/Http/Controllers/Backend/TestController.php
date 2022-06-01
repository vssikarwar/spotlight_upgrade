<?php
namespace App\Http\Controllers\Backend;
   
use App\Http\Controllers\Controller;
use App\Services\DemoOne;
use Illuminate\Http\Request;
use App\Models\locations;

   
class TestController extends Controller
{
    public function show()
    {
        return view('backend.test.locations');
    }

    
    public function index(){
        
        // foreach (locations::all() as $location) {
        //      $location->name;
        //      $location->clientId;
            
        // }
        

        // echo $customServiceInstance->doSomethingUseful();
    }


}