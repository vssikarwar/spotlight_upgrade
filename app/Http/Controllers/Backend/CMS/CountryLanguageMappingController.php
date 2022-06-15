<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryLanguageMapping;

class CountryLanguageMappingController extends Controller
{
    public function index()
    {
        $countryLanguageMapping = CountryLanguageMapping::paginate(10);
    
        return view('backend.dashboards.admin.countryLanguageMapping.index', compact('countryLanguageMapping'));
       
    }
}
