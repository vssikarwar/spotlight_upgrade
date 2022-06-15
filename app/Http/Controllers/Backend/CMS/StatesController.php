<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\States;

class StatesController extends Controller
{
    public function index()
    {
        $states = States::paginate(10);
    
        return view('backend.dashboards.admin.states.index', compact('states'));
       
    }
}
