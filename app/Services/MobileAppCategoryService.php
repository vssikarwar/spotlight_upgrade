<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\MobileAppCategory;


class MobileAppCategoryService
{

    public function get() 
    { 
        
          return MobileAppCategory::paginate(10);
    
        
    } 
    
 
} 