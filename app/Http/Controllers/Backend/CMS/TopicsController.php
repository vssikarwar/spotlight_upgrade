<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TopicsService;


class TopicsController extends Controller
{
    public function __construct(TopicsService $Topics)
    {
        $this->Topics = $Topics;
    }

    public function index()
    {  


        $topics = $this->Topics->get();

    
        return view('backend.dashboards.admin.topics.index', compact('topics'));
       
    }
}
