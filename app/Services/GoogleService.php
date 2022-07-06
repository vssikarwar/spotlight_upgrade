<?php 
namespace App\Service;

use GuzzleHttp\Exception\GuzzleException;
use App\Repositry\GoogleRepositryInterface;

class GoogleService{

    public function __construct(GoogleRepositryInterface $googlepositryInterface){
        $this->GoogleRepositryInterface = $googlepositryInterface;
    }

    public function getClient():\Google_Client
    {
        $applicationName = 'location';
        $client = new \Google_Client();
        $client->setApplicationName($applicationName);
        $client->setRedirectUri('http://127.0.0.1:8000/google/callback');
        $client->setAuthConfig([
            "client_id"=>"656859951325-3743ql50ba5sacoig4bh6h6rsi2stdh7.apps.googleusercontent.com",
            "client_secret"=>"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",
            "auth_uri"=>"https://accounts.google.com/o/oauth2/auth"
        ]);
        $client->setAccessType('offline'); // necessary for getting the refresh token
        $client->setApprovalPrompt ('force'); // necessary for getting the refresh token
        $client->setScopes(
            [
                \Google\Service\Oauth2::USERINFO_PROFILE,
                \Google\Service\Oauth2::USERINFO_EMAIL,
                \Google\Service\Oauth2::OPENID,
                \Google\Service\Localservices::ADWORDS // allows reading of google drive metadata
            ]
        );
        $client->setIncludeGrantedScopes(true);
        return $client;
    } 

    public function saveAccessToken($request){
        $authCode = urldecode($request->input('code'));
        $client = $this->getClient();
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
       
        $client->setAccessToken(json_encode($accessToken));

        $service = new \Google\Service\Oauth2($client);
        $userData = $service->userinfo->get();
        $this->GoogleRepositryInterface->saveData($accessToken,$userData);
    }

  

}


















































    // public function check(){
    //     $allDatas=  $this->GoogleRepositryInterface->getAllData();
    //     $client = new \GuzzleHttp\Client();
    //     try{
    //     $response = $client->get('https://www.googleapis.com/oauth2/v1/tokeninfo?access_token='.$allDatas['access_token']);
    //     print_r($response->getBody()->getContents());
    //     }
    //     catch(GuzzleException $e){
    //         echo " access token expired";
    //     }
    // }




