<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\LmsApiData;


class LmsApiDataService
{

    public function get() 
    { 
        
          return LmsApiData::paginate(10);
    
        
    } 
    
 
} 