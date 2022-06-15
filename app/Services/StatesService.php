<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\States;


class StatesService
{

    public function get() 
    { 
        
          return States::paginate(10);
    
        
    } 
    
 
} 