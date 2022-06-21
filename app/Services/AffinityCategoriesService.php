<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;

class AffinityCategoriesService
{

    public function get() 
    { 
        
          return AffinityCategories::paginate(20);
    
        
    } 
    
 
} 