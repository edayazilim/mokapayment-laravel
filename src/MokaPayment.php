<?php

namespace Paradiseofcode\MokaPayment;

use Paradiseofcode\MokaPayment\Requests\PaymentDealerRequest;
use Paradiseofcode\MokaPayment\Resources\HeaderResource;

class MokaPayment extends PaymentDealerRequest
{

    /**
     * @return array
     */
    public function getMokaData()
    {
        $data = (new HeaderResource($this))->toResponse(app('request'));

         return $data->getData();
    }


}
