<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CallToAction;

class CallToActionController extends Controller
{
    public function index()
    {
        $callToAction = CallToAction::paginate(10);

        return view('backend.dashboards.admin.callToAction.index', compact('callToAction'));
    }
   
}
