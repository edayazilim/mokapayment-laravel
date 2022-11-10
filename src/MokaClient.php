<?php

namespace Paradiseofcode\MokaPayment;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Http;
use function PHPUnit\Framework\isType;

class MokaClient
{
    public $url;

    public $res;

    /**
     * @param $method
     */
    public function __construct()
    {
        config('mokapayment.type') == 1 ?
            $this->url = "/PaymentDealer/DoDirectPaymentThreeD" :
            $this->url = "/PaymentDealer/DoDirectPayment";


    }

    public function sendData($data)
    {

        $data = @json_decode(json_encode($data->data), true);
        $this->res = Http::acceptJson()->post(config('mokapayment.moka_base_url').$this->url,$data);
        return $this->res;
//        $this->res = new Client([
//            'base_uri' => config('mokapayment.moka_base_url'),
//            'headers' => [
//                'Accept' => 'application/json',
//                'Content-Type' => 'application/json'
//            ],
//            'curl' => [
//                CURLOPT_RETURNTRANSFER => 1,
//                CURLOPT_POST => 1,
//                CURLOPT_SSLVERSION => 6,
//                CURLOPT_SSL_VERIFYPEER => 0
//            ]
//        ]);
//        try {
//            return $this->res->post($this->url, [
//                'json' => $data
//            ]);
//        } catch (GuzzleException $e){
//            return response()->json([
//                'error'=>$e->getMessage()
//            ],500);
//        }

    }




}
