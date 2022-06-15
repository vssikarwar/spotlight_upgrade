<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Currencies;


class CurrenciesService
{

    public function get() 
    { 
        
          return Currencies::paginate(10);
    
        
    } 
    
 
} 