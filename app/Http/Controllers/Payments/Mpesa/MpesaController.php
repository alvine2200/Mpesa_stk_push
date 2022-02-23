<?php

namespace App\Http\Controllers\Payments\Mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mpesa;

class MpesaController extends Controller
{
   public function stkPush()
   {
     $mpesa=new \Safaricom\Mpesa\Mpesa();

         $BusinessShortCode=174379;
         $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
         $TransactionType="CustomerPayBillOnline";
         $Amount="1";
         $PartyA= "254712135643";
         $PartyB= 174379;
         $PhoneNumber= "254712135643";
         $CallBackURL= "https://simon.com";
         $AccountReference ="Alvine Project Demo";
         $TransactionDesc="Alvie Web Company";
         $Remarks="Thank you for transacting with Alvine";




     $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode,
         $LipaNaMpesaPasskey,
         $TransactionType,
         $Amount, 
         $PartyA, 
         $PartyB,
         $PhoneNumber, 
         $CallBackURL,
         $AccountReference, 
         $TransactionDesc, 
         $Remarks


     );

     dd($stkPushSimulation);

   }

}
