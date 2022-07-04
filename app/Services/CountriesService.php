<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Countries;


class CountriesService
{

    public function get() 
    { 
        
          return Countries::paginate(10);  
    
        
    } 

    public function add($request): void 
    {

        $this->ACRepositoryInterface->saveData($request);

    }
    
 
} 