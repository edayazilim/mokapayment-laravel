<?php

namespace Paradiseofcode\MokaPayment\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HeaderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {
        $paymentDealerRequest = [
            "PaymentDealerAuthentication"=>[
                "DealerCode"=>config('mokapayment.moka_delaer_code'),
                "Username"=>config('mokapayment.moka_username'),
                "Password"=>config('mokapayment.moka_password'),
                "CheckKey"=>hash("sha256", config("mokapayment.moka_delaer_code")
                    . "MK" . config("mokapayment.moka_username")
                    . "PD" . config("mokapayment.moka_password"))
            ],
            "PaymentDealerRequest" => [
                "CardHolderFullName" => $this->cardHolderFullName,
                "CardNumber" => $this->cardNumber,
                "ExpMonth" => $this->expMonth,
                "ExpYear" => $this->expYear,
                "CvcNumber" => $this->cvcNumber,
                "CardToken" => $this->cardToken,
                "Amount" => number_format((float)$this->amount, 2, '.', ''),
                "Currency" => $this->currency,
                "InstallmentNumber" => $this->installmentNumber,
                "ClientIP" => $this->clientIP,
                "OtherTrxCode" => $this->otherTrxCode,
                "SubMerchantName" => $this->subMerchantName,
                "IsPoolPayment" => $this->isPoolPayment,
                "IsPreAuth" => $this->isPreAuth,
                "IsTokenized" => $this->isTokenized,
                "Software" => $this->software,
                "Description" => $this->description,
                "BuyerInformation" => [
                    "BuyerFullName" => $this->buyerFullName,
                    "BuyerGsmNumber" => $this->buyerGsmNumber,
                    "BuyerEmail" => $this->buyerEmail,
                    "BuyerAddress" => $this->buyerAddress,
                ],
                "CustomerInformation"=> [
                    "DealerCustomerId"=> $this->dealerCustomerId,
                    "CustomerCode"=> $this->customerCode,
                    "FirstName"=> $this->firstName,
                    "LastName"=>$this->lastName,
                    "Gender"=> $this->gender,
                    "BirthDate"=> $this->birthDate,
                    "GsmNumber"=> $this->gsmNumber,
                    "Email"=> $this->email,
                    "Address"=>$this->address,
                    "CardName"=>$this->cardName,
                ]
            ],
        ];

        if(config("mokapayment.type") ){
            $paymentDealerRequest["PaymentDealerRequest"]["ReturnHash"] = $this->returnHash;
            $paymentDealerRequest["PaymentDealerRequest"]["RedirectUrl"] = $this->redirectUrl;
            $paymentDealerRequest["PaymentDealerRequest"]["RedirectType"] = $this->redirectType;
        }

        return $paymentDealerRequest;
    }
}
