<?php

namespace App\Http\Controllers;

use App\Events\pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    { $payPalConfig =Config::get('paypal');
        $this->apiContext= new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['client_secret']

            )
        );
        
    }
    public function pagarconpaypal(){
        $payer = new Payer();
$payer->setPaymentMethod('paypal');

$amount = new Amount();
$amount->setTotal('2.00');
$amount->setCurrency('USD');

$transaction = new Transaction();
$transaction->setAmount($amount);


$callbackurl= url('/paypal/status');
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($callbackurl)
    ->setCancelUrl($callbackurl);

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);
    try {
        $payment->create($this->apiContext);
        //echo $payment;
    return redirect()->away($payment->getApprovalLink());
    }
    catch (PayPalConnectionException $ex) {
        // This will print the detailed information on the exception.
        //REALLY HELPFUL FOR DEBUGGING
        echo $ex->getData();
    }   
}
public function paypalstatus(Request $request){
    $paymentId= $request->input('paymentId');
    $payerId= $request->input('PayerID');
    $token= $request->input('token');
    if( !$paymentId || !$payerId ||  !$token){
        return redirect()->route('paciente.create')->with(['message'=>'Lo sentimos el pago atravez de paypal no se pudo realizar']);
    }
$payment=Payment::get( $paymentId, $this->apiContext);

$execution=new PaymentExecution();
$execution->setPayerId( $payerId);

$result=$payment->execute($execution,$this->apiContext);

if($result->getState()==='approved'){

    return redirect()->route('login')->with(['message'=>' El pago atravez de paypal se realizo correcctamente']);
}
return redirect()->route('paciente.create')->with(['message'=>'Lo sentimos el pago atravez de paypal no se pudo realizar']);

}
    
}
