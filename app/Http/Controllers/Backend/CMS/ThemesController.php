<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ThemesService;


class ThemesController extends Controller
{
    public function __construct(ThemesService $Themes)
    {
        $this->Themes = $Themes;
    }

    public function index()
    {  


        $themes = $this->Themes->get();
    
        return view('backend.dashboards.admin.themes.index', compact('themes'));
       
    }
}
