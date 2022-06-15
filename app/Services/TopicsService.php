<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Topics;

class TopicsService
{

    public function get() 
    { 
        
          return Topics::paginate(10);
    
        
    } 
    
 
} 