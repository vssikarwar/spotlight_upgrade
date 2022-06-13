<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsPages;

class CmsPagesController extends Controller
{
    public function index()
    {

        $cmsPages = CmsPages::latest()->paginate(10);

        return view('backend.dashboards.admin.cmsPages.index', compact('cmsPages'));

    } 
}
