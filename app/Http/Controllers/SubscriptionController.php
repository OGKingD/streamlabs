<?php

namespace App\Http\Controllers;

use Braintree\Gateway;
use Braintree\Transaction;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\ArrayShape;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        //create a transaction ;
        $result = ($this->getGateway())->transaction()->sale([
            'amount' => $request->input('amount'),
            'paymentMethodNonce' => $request->input('payment_method_nonce'),
            'deviceData' => null,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);
        $successCodes = [
            Transaction::AUTHORIZED,
            Transaction::AUTHORIZED,
            Transaction::AUTHORIZING,
            Transaction::SETTLED,
            Transaction::SETTLING,
            Transaction::SETTLEMENT_CONFIRMED,
            Transaction::SETTLEMENT_PENDING,
            Transaction::SUBMITTED_FOR_SETTLEMENT
        ];

        $success = false;
        $transaction = null;
        //Do some processing
        if ($result->success){
            $transaction = $result->transaction;
            if (in_array($transaction->status, $successCodes)){
                $success = true;
                //set subscription status to true
                $user = $request->user();
                $user->update([
                    "subscribed" => 1
                ]);
            }
        }

        //return to receipt page or something
        return view("receipt", compact('success','transaction'));


    }

    /**
     * @return Gateway
     */
    public function getGateway(): Gateway
    {
        return new Gateway([
            'environment' => config('braintree.environment'),
            'merchantId' => config('braintree.merchant_id'),
            'publicKey' => config('braintree.merchant_public_key'),
            'privateKey' => config('braintree.merchant_private_key')
        ]);
    }
    //

    public function generateClientToken(): array
    {
        $token = ($this->getGateway())->clientToken()->generate();
        return ['token' => $token];

    }

    public function cancelSubscription(Request $request): array
    {
        $user = $request->user();
        $user->update([
            "subscribed" => 0
        ]);

        return ["status" => true];


    }
}
