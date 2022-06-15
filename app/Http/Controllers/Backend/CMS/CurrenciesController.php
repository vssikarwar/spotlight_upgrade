<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currencies;


class CurrenciesController extends Controller
{
    public function index()
    {
        $currencies = Currencies::paginate(10);
    
        return view('backend.dashboards.admin.currencies.index', compact('currencies'));
       
    }
}
