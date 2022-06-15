<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;

class CountriesController extends Controller
{
    public function index()
    {
        
        $countries = Countries::paginate(10);

        return view('backend.dashboards.admin.countries.index', compact('countries'));
       
   
    }
}
