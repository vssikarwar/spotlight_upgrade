<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TimeZonesService;
use App\Models\TimeZones;

class TimeZonesController extends Controller
{
    public function __construct(TimeZonesService $TimeZones)
    {
        $this->TimeZonesService = $TimeZones;
    }

    public function index()
    {  

        $timeZones = $this->TimeZonesService->get();
    
        return view('backend.dashboards.admin.timeZones.index', compact('timeZones'));
       
    }

    public function add()
    {
        return view('backend.dashboards.admin.timeZones.add');
    }

    public function statusUpdate(TimeZones $timeZones)
    {

        $this->TimeZonesService->statusUpdate($timeZones);

        return redirect()->route('TimeZones.index')
             ->withSuccess(__('Post updated successfully.'));

    }

    public function edit(TimeZones $timeZones)  
    {
        return view('backend.dashboards.admin.affinityCategories.edit', [
            'timeZones'=>$timeZones
        ]);
    }

    public function delete(TimeZones $timeZones) 
    {
        $this->TimeZonesService->delete($timeZones);

        return redirect()->route('TimeZones.index')
        ->withSuccess(__('Time Zone deleted successfully.'));
    }
}
