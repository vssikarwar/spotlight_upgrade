<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Backend\Admin\Publishers;

class DashboardController extends Controller
{
    public function index()
    {

        $role = auth()->user()->roles->toArray()[0]['name'];

        if($role == 'admin')
        {      
            return redirect()->route('dashboard.admin');
        }
        
        elseif($role == 'support')
        {
            return view('backend.dashboards.support.index'); 
        }  

    }

    public function publishers()
    {
        $publishers = Publishers::paginate(10);
            return view('backend.dashboards.admin.index', compact('publishers'));
    }

    public function publishersDashboard()
    {
        return view('backend.dashboards.admin.dashboard');   
    }
    
}
