<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CustomerPincodesService;

class CustomerPincodesController extends Controller
{
    public function __construct(CustomerPincodesService $CustomerPincodes)
    {
        $this->CustomerPincodes = $CustomerPincodes;
    }

    public function index()
    {  

        $customerPincodes = $this->CustomerPincodes->get();

        return view('backend.dashboards.admin.customerPincodes.index', compact('customerPincodes'));


    }
}
