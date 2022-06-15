<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topics;


class TopicsController extends Controller
{
    public function index()
    {
        
        $topics = Topics::paginate(10);
    
        return view('backend.dashboards.admin.topics.index', compact('topics'));
       
    }
}
