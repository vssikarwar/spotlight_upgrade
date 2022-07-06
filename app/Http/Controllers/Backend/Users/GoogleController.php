<?php

namespace App\Http\Controllers\Backend\Users;

use Illuminate\Http\Request;
use App\Service\GoogleService;
use App\Http\Controllers\Controller;

class GoogleController extends Controller
{
    
    public function __construct(GoogleService $googleService)
    {
        $this->GoogleService=$googleService;
        
    }

    public function getAuthUrl(Request $request)
    {
        $client = $this->GoogleService->getClient();
        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    } 

    public function googleCallBack(Request $request)
    {
        $this->GoogleService->saveAccessToken($request);
        echo "access token save successfully";
    } 

  
}
