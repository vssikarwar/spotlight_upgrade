<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CountryLanguageMapping;

class CountryLanguageMappingService
{

    public function get() 
    { 
        
          return CountryLanguageMapping::paginate(10);
           
    } 
    
 
} 