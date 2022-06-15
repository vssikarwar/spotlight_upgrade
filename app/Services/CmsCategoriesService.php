<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CmsCategories;


class CmsCategoriesService
{

    public function get() 
    { 
        
          return CmsCategories::paginate(10);
    
        
    } 
    
 
} 