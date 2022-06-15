<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = Cities::paginate(10);
    
        return view('backend.dashboards.admin.cities.index', compact('cities'));
       
    }
}
