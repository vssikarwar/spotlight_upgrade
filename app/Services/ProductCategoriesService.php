<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ProductCategories;


class ProductCategoriesService
{

    public function get() 
    { 
        
          return ProductCategories::paginate(10);
    
        
    } 
    
 
} 