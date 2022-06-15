<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerPincodes;

class CustomerPincodesController extends Controller
{
    public function index()
    {
        
        $customerPincodes = CustomerPincodes::paginate(10);

        return view('backend.dashboards.admin.customerPincodes.index', compact('customerPincodes'));


    }
}
