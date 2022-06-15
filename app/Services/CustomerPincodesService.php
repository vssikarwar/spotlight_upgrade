<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CustomerPincodes;


class CustomerPincodesService
{

    public function get() 
    { 
        
          return CustomerPincodes::paginate(10);
    
        
    } 
    
 
} 