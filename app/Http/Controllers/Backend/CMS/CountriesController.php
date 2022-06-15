<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountriesService;

class CountriesController extends Controller
{
    public function __construct(CountriesService $Countries)
    {
        $this->Countries = $Countries;
    }

    public function index()
    {  


        $countries = $this->Countries->get();

        return view('backend.dashboards.admin.countries.index', compact('countries'));
       
   
    }
}
