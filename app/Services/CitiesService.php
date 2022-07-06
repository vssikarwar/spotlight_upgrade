<?php
namespace App\Services;

use App\Models\Cities;
use Illuminate\Http\Request;
use App\Repository\CitiesRepositoryInterface;


class CitiesService
{
    public function __construct(CitiesRepositoryInterface $citiesRepositoryInterface)
    {
        $this->CitiesRepositoryInterface = $citiesRepositoryInterface;
    }

    public function get() 
    { 
        return  $this->CitiesRepositoryInterface->list();
        
    }
    
    public function delete($cities){
       return $cities->delete();

    }

    public function getCountriesList(){
        return  $this->CitiesRepositoryInterface->countriesList();
    }

    public function getStatesList(){
        return  $this->CitiesRepositoryInterface->statesList();
    }

    public function getStateName($stateId){
      
        return  $this->CitiesRepositoryInterface->stateName($stateId);
    }

    public function updateData($updatedData,$cities){
        return  $this->CitiesRepositoryInterface->updateCity($updatedData,$cities);
    }

    public function addNewCities($dataToAdd){
      return  $this->CitiesRepositoryInterface->addCity($dataToAdd);
    }

    public function getFilterList($params){

        return $this->CitiesRepositoryInterface->filterCityList($params);
        

    }

 
} 