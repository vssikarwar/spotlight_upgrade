<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\StatesService;

class StatesController extends Controller
{
    public function __construct(StatesService $States)
    {
        $this->States = $States;
    }

    public function index()
    {  


        $states = $this->States->get();
    
        return view('backend.dashboards.admin.states.index', compact('states'));
       
    }
}
