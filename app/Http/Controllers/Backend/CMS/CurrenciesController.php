<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CurrenciesService;


class CurrenciesController extends Controller
{
    public function __construct(CurrenciesService $Currencies)
    {
        $this->Currencies = $Currencies;
    }

    public function index()
    {  


        $currencies = $this->Currencies->get();
    
        return view('backend.dashboards.admin.currencies.index', compact('currencies'));
       
    }
}
