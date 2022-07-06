<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Countries;
use App\Repository\CountriesRepositoryInterface;

class CountriesService
{
    

    public function __construct(CountriesRepositoryInterface $CountriesRepositoryInterface)
    {
            $this->CountriesInterface = $CountriesRepositoryInterface;
    }

    public function get() 
    { 
        
          return $this->CountriesInterface->get();  
    
        
    } 

    public function add($request) 
    {

        $this->CountriesInterface->saveData($request);

    }

    public function delete($countries) 
    {
       $result = $countries->delete();

    }

    public function statusUpdate($countries)
    {
      if($countries['active'] == 1)
      {
        $status = 0;
      }
      else
      {
        $status = 1;
      }

      $this->CountriesInterface->updateStatus($countries, $status);


    }

    public function update($request, $countries)
    {
        // echo "<pre>";print_r(request()->all());die;

        $this->CountriesInterface->update($request, $countries);

    }
     
 
} 