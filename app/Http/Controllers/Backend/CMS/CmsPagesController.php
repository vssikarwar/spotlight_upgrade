<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CmsPagesService;

class CmsPagesController extends Controller
{
    public function __construct(CmsPagesService $CmsPages)
    {
        $this->CmsPages = $CmsPages;
    }

    public function index()
    {  


        $cmsPages = $this->CmsPages->get();

        return view('backend.dashboards.admin.cmsPages.index', compact('cmsPages'));

    } 
}
