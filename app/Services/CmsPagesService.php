<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CmsPages;


class CmsPagesService
{

    public function get() 
    { 
        
          return CmsPages::paginate(10);
         
    } 
    
 
} 