<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountriesService;
use App\Models\Countries;

class CountriesController extends Controller
{
    public function __construct(CountriesService $Countries)
    {
        $this->CountriesService = $Countries;
    }

    public function index()
    {  


        $countries = $this->CountriesService->get();

        return view('backend.dashboards.admin.countries.index', compact('countries'));
       
   
    }

    public function add()
    {
        return view('backend.dashboards.admin.countries.add');
    }

    public function addData(Request $request)
    {

        $request->validate([
            'name'        => 'required|regex:/^[a-z A-Z]+$/u|max:100|unique:countries,name',
            'iso_alpha_2' => 'required|regex:/^[a-zA-Z]+$/u|max:2|unique:countries,iso_alpha_2',
            'iso_alpha_3' => 'required|regex:/^[a-zA-Z]+$/u|max:3|unique:countries,iso_alpha_3',
            'iso_numeric' => 'max:5',
            'dailing_code'=> 'max:6',
            'currency'    => 'max:10',
        ]);
        


        $this->CountriesService->add($request);


        return redirect()->route('Countries.index')
        ->withSuccess(__('Country created successfully.'));

    }

    public function edit(Countries $countries)
    {
        return view('backend.dashboards.admin.countries.edit', [
            'countries'=>$countries
        ]);
    }

    public function editData(Request $request,Countries $countries)
    {
        $request->validate([
            'name'        => 'required|regex:/^[a-z A-Z]+$/u|max:100|unique:countries,name,'.$countries->id,
            'iso_alpha_2' => 'required|regex:/^[a-zA-Z]+$/u|max:2|unique:countries,iso_alpha_2,'.$countries->id,
            'iso_alpha_3' => 'required|regex:/^[a-zA-Z]+$/u|max:3|unique:countries,iso_alpha_3,'.$countries->id,
            'iso_numeric' => 'max:5',
            'dailing_code'=> 'max:6',
            'currency'    => 'max:10',
        ]);

        $this->CountriesService->update($request, $countries);
        
        return redirect()->route('Countries.index')
            ->withSuccess(__('Post updated successfully.'));
    }

    public function statusUpdate(Countries $countries)
    {

        $this->CountriesService->statusUpdate($countries);

        return redirect()->route('Countries.index')
             ->withSuccess(__('Post updated successfully.'));

    }

    public function deleteData(Countries $countries)
    {
        $this->CountriesService->delete($countries);

        return redirect()->route('Countries.index')
        ->withSuccess(__('Country deleted successfully.'));
    }
}
