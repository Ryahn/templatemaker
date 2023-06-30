<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapingController extends Controller
{
    function login() {
        $url = "https://f95zone.to/login";

        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        
        curl_setopt($ch, CURLOPT_URL, $url); 
        $cookie = 'cookies.txt';
        $timeout = 30;
        
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT,         10); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,  $timeout );
        curl_setopt($ch, CURLOPT_COOKIEJAR,       $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE,      $cookie);
        
        curl_setopt ($ch, CURLOPT_POST, 1); 
        curl_setopt ($ch,CURLOPT_POSTFIELDS,"user_name=user&user_password=pass&passcode=code");     
        
        $result = curl_exec($ch);
        
        /* //OPTIONAL - Redirect to another page after login
        $url = "http://aftabcurrency.com/some_other_page";
        curl_setopt ($ch, CURLOPT_POST, 0); 
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
         */ //end OPTIONAL 
        
        curl_close($ch); 
        echo $result;
    }
}
