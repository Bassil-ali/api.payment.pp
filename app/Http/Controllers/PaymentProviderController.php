<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentProviderController extends Controller
{
    public function getCheckOutId(Request $request){
        //dd($request);
/*        $url = "https://test.oppwa.com/v1/checkouts";
           $data = "entityId=8a8294174d0595bb014d05d82e5b01d2" .
            "&amount=200" .
            "&currency=EUR" .
            "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0ZDA1OTViYjAxNGQwNWQ4MjllNzAxZDF8OVRuSlBjMm45aA=='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res = json_decode($responseData, true);*/
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174d0595bb014d05d82e5b01d2" .
                "&amount=92.00" .
                "&currency=EUR" .
                "&paymentType=DB";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                   'Authorization:Bearer OGE4Mjk0MTc0ZDA1OTViYjAxNGQwNWQ4MjllNzAxZDF8OVRuSlBjMm45aA=='));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $responseData = curl_exec($ch);
    if(curl_errno($ch)) {
        return curl_error($ch);
    }
    curl_close($ch);
    return $responseData;

        //$view = view('ajax.form')->with(['responseData' => $res , 'id' => $request -> offer_id])->renderSections();
         
        /*return response()->json([
            'status' => true,
            'content' => $view['main']
        ]);*/
        return $responseData;


    }
}