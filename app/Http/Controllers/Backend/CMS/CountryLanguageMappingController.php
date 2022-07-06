<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CountryLanguageMappingService;



class CountryLanguageMappingController extends Controller
{
    public function __construct(CountryLanguageMappingService $CountryLanguageMapping)
    {
        $this->CountryLanguageMapping = $CountryLanguageMapping;
    }

    public function index()
    {  


        $countryLanguageMapping = $this->CountryLanguageMapping->get();
    
        return view('backend.dashboards.admin.countryLanguageMapping.index', compact('countryLanguageMapping'));
       
    }

    
}
