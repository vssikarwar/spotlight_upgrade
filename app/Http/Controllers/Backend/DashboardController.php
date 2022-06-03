<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;

        if($id == 1)
        {      
         echo "Admin";
        }
        else
        {
         echo "User";
        }               
    }
}
