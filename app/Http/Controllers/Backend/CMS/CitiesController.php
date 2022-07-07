<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use Illuminate\Http\Request;
use App\Services\CitiesService;


class CitiesController extends Controller
{
    public function __construct(CitiesService $Cities)
    {
        $this->CitySercive = $Cities;
    }

    public function index(Request $request){

        $cities = $this->CitySercive->get();
        $states=$this->CitySercive->getStatesList();
        return view('backend.dashboards.admin.cities.index')->with([
            'cities'=>$cities,
            'states'=>$states
        ]);
    }

    public function add(){

        $countries=$this->CitySercive->getCountriesList();
        $states=$this->CitySercive->getStatesList();
        return view('backend.dashboards.admin.cities.add',[
            'countries'=>$countries,
            'states'=>$states,
        ]);
    }

    public function delete(Cities $cities){

        $this->CitySercive->delete($cities);
        return redirect()->route('Cities.index')
        ->with('success', 'Cities Deleted!');
    }

    public function edit(Cities $cities){

        $countries=$this->CitySercive->getCountriesList();
        $states=$this->CitySercive->getStatesList();
        $stateName=$this->CitySercive->getStateName($cities->state_id);
        return view('backend.dashboards.admin.cities.edit',[
            'cities'=>$cities,
            'countries'=>$countries,
            'states'=>$states,
            'stateName'=>$stateName
        ]);

    }

    public function update(Request $request,Cities $cities){
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|unique:App\Models\Cities,name,'.$cities->id
        ]);
        if( $request->isMethod('post')){
            $updatedData= $request->all();
            $stateName=$this->CitySercive->updateData($updatedData,$cities);
            return redirect()->route('Cities.index')
            ->withSuccess(__('Cities updated successfully.'));
        }
    }
    
    public function addCities(Request $request){
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|unique:App\Models\Cities,name'
        ]);
        if( $request->isMethod('post')){
            $dataToAdd= $request->all();
            $stateName=$this->CitySercive->addNewCities($dataToAdd);
            return redirect()->route('Cities.index')
            ->withSuccess(__('Cities Added successfully.'));
        }

    }

    public function filter(Request $request){

        if( $request->isMethod('get')){
            $params= $request->all();
            $cities = $this->CitySercive->getFilterList($params);
            $states=$this->CitySercive->getStatesList();
            return view('backend.dashboards.admin.cities.index')->with([
                'cities'=>$cities,
                'states'=>$states
            ]);
        }

    }
}
