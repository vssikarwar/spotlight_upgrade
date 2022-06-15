<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CitiesService;


class CitiesController extends Controller
{
    public function __construct(CitiesService $Cities)
    {
        $this->Cities = $Cities;
    }

    public function index()
    {  


        $cities = $this->Cities->get();
    
        return view('backend.dashboards.admin.cities.index', compact('cities'));
       
    }
}
