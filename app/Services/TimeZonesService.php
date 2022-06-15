<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\TimeZones;


class TimeZonesService
{

    public function get() 
    { 
        
          return TimeZones::paginate(10);
    
        
    } 
    
 
} 