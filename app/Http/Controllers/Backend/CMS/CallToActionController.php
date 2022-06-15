<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CallToActionService;

class CallToActionController extends Controller
{

    public function __construct(CallToActionService $CallToAction)
    {
        $this->CallToAction = $CallToAction;
    }
    
    
    public function index()
    {
        $callToAction = $this->CallToAction->get();
        return view('backend.dashboards.admin.callToAction.index', compact('callToAction'));
    }
   
}
