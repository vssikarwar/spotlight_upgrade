<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CallToAction;

class CallToActionService
{


    public function get()
    { 
        
        $callToAction = CallToAction::paginate(10);    
        
    } 
    
 
} 