<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Languages;


class LanguagesService
{

    public function get() 
    { 
        
          return Languages::paginate(10);
    
        
    } 
    
 
} 