<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TimeZones;

class TimeZonesController extends Controller
{
    public function index()
    {
        $timeZones = TimeZones::paginate(10);
    
        return view('backend.dashboards.admin.timeZones.index', compact('timeZones'));
       
    }
}
