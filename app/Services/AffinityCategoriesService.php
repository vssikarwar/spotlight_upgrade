<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;
use App\Models\User;

class AffinityCategoriesService
{

    public function get()
    { 
        
          return AffinityCategories::all();
    
        
    }
    
 
} 