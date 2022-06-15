<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LmsApiDataService;

class LmsApiDataController extends Controller
{
    public function __construct(LmsApiDataService $LmsApiData)
    {
        $this->LmsApiData = $LmsApiData;
    }

    public function index()
    {  


        $lmsApiData = $this->LmsApiData->get();

        return view('backend.dashboards.admin.lmsApiData.index', compact('lmsApiData'));
        
    }
   
}
