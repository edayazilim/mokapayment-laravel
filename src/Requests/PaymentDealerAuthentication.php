<?php

namespace Paradiseofcode\MokaPayment\Requests;

class PaymentDealerAuthentication
{

    public $paymentDealerAuthentication = [
        "DealerCode" => "",
        "Username" => "",
        "Password" => "",
        "CheckKey" => ""
    ];



    public function __construct()
    {
        $this->paymentDealerAuthentication["DealerCode"] = config("mokapayment.moka_delaer_code");
        $this->paymentDealerAuthentication["Username"] = config("mokapayment.moka_username");
        $this->paymentDealerAuthentication["Password"] = config("mokapayment.moka_password");
        $this->paymentDealerAuthentication["CheckKey"] =
            hash("sha256", config("mokapayment.moka_delaer_code")
                . "MK" . config("mokapayment.moka_username")
                . "PD" . config("mokapayment.moka_password"));
    }

}
