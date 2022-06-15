<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Cities;


class CitiesService
{

    public function get() 
    { 
        
          return Cities::paginate(10);
    
        
    } 
    
 
} 