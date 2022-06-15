<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LanguagesService;


class LanguagesController extends Controller
{
    public function __construct(LanguagesService $Languages)
    {
        $this->Languages = $Languages;
    }

    public function index()
    {  


        $languages = $this->Languages->get();
    
        return view('backend.dashboards.admin.languages.index', compact('languages'));
       
    }
}
