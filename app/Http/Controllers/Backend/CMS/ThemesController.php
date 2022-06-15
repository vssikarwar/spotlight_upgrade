<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Themes;

class ThemesController extends Controller
{
    public function index()
    {
        $themes = Themes::paginate(10);
    
        return view('backend.dashboards.admin.themes.index', compact('themes'));
       
    }
}
