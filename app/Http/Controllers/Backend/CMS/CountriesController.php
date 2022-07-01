<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountriesService;

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
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:55',
            'googleid' => 'required',
            'parent_id'=> 'required',
        ]);
        


        $this->CountriesService->add($request);


        return redirect()->route('Countries.index')
        ->withSuccess(__('Post created successfully.'));

    }

    public function edit()
    {
        return view('backend.dashboards.admin.countries.edit');
    }

    public function editData()
    {

    }

    public function deleteData()
    {
        $this->CountriesService->delete($countries);

        return redirect()->route('countries.index')
        ->withSuccess(__('Country deleted successfully.'));
    }
}
