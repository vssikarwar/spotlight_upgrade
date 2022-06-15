<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Languages;


class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Languages::paginate(10);
    
        return view('backend.dashboards.admin.languages.index', compact('languages'));
       
    }
}
