<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Countries;
use App\Repository\CountriesRepositoryInterface;


class CountriesService
{
    public function __construct(CountriesRepositoryInterface $CountriesRepositoryInterface)
    {
            $this->CountriesRepositoryInterface = $CountriesRepositoryInterface;
    }

    public function get() 
    { 
        
          return Countries::paginate(10);  
     
    }  

    public function add($request): void 
    {

        $this->CountriesRepositoryInterface->saveData($request);

    }
    
 
} 