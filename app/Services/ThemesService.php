<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Themes;


class ThemesService
{

    public function get() 
    { 
        
          return Themes::paginate(10);
    
        
    } 
    
 
} 