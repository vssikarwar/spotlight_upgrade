<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LmsApiData;

class LmsApiDataController extends Controller
{
    public function index()
    {
        $lmsApiData = LmsApiData::paginate(10);

        return view('backend.dashboards.admin.lmsApiData.index', compact('lmsApiData'));
        
    }
   
}
