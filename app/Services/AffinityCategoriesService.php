<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Backend\Admin\AffinityCategories;
use App\Models\User;

class AffinityCategoriesService
{

    public function get()
    { 

        
        $uid =  auth()->user()->id; 

        if($uid == 1)
        {
            
            return AffinityCategories::all();
        }
        else
        {
            
            return redirect()->route('dashboard.index');
        }
            
           
        
        
    }
    
 
} 