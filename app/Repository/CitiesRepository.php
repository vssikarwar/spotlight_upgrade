<?php

namespace App\Repository;

use App\Models\Cities;
use App\Models\Countries;
use App\Models\States;

class CitiesRepository implements CitiesRepositoryInterface{

    public function list(){

        return Cities::join('states','states.id','=','cities.state_id')->select('cities.*','states.name as state_name',)->paginate(10);
         
    }

    public function countrieslist(){
        return Countries::all();
    }

    public function statesList(){
        return States::all();
    }

    public function stateName($stateId){
        return States::where('id',$stateId)->first();
    }

    public function updateCity($updatedData,$cities){
        unset($updatedData['_token']);
        return Cities::where('id',$cities->id)->update($updatedData);
    }

    public function addCity($dataToAdd){
        unset($dataToAdd['_token']);
        $countryName = Countries::select('name')->where('id',$dataToAdd['country_id'])->first()->toArray();
        $dataToAdd['country_name']=$countryName['name'];
        $dataToAdd['alias']=" ";
        return Cities::create($dataToAdd);
    }

    public function filterCityList($params){
        return Cities::join('states','states.id','=','cities.state_id')->where('cities.state_id',$params['state_id'])->select('cities.*','states.name as state_name',)->paginate(10);
    }


}