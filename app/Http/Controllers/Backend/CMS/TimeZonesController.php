<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TimeZonesService;

class TimeZonesController extends Controller
{
    public function __construct(TimeZonesService $TimeZones)
    {
        $this->TimeZones = $TimeZones;
    }

    public function index()
    {  


        $timeZones = $this->TimeZones->get();
    
        return view('backend.dashboards.admin.timeZones.index', compact('timeZones'));
       
    }
}
