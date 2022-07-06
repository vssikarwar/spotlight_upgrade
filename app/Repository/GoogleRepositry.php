<?php
namespace App\Repositry;

use App\Models\UserAccessToken;

class GoogleRepositry implements GoogleRepositryInterface{

    public function saveData($accessToken,$userData){
        UserAccessToken::create(['name'=> $userData->name,'email'=>$userData->email,
                        'user_id'=>session()->get('user_id'),
                          'access_token'=>$accessToken['access_token'],
                          'refresh_token'=>$accessToken['refresh_token'],
                          'type'=>'adwords',
                          'token_created'=>$accessToken['created']
                        ]);
    }

  
  
}

