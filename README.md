# Installation

Require this package with composer.

```
composer require paradiseofcode/mokapayment-laravel
```
Add the following code to the .env file. 

```dotenv
API_MOKA_DELAER_CODE=xxx
API_MOKA_USERNAME=xxx
API_MOKA_PASSWORD=xxx
API_MOKA_BASE_URL=https://service.moka.com
API_MOKA_TREED=1 
```
# Usage
## Example

```php
use Illuminate\Http\Request;
use Paradiseofcode\MokaPayment\MokaClient;
use Paradiseofcode\MokaPayment\MokaPayment;

class HomeController extends Controller
{
    //
    public function test(Request $request)
    {
        $moka = new MokaPayment;
        $moka->setAmount(0.01);
        $moka->setCardHolderFullName('John Smith');
        $moka->setCardNumber("5127541122223332");
        $moka->setOtherTrxCode('AAS213121231');
        $moka->setExpMonth("12");
        $moka->setExpYear("2022");
        $moka->setCvcNumber("000");
        $moka->clientIP = $request->getClientIp();
        $moka->setRedirectUrl('https://www.yourdomain.com/orderStatus/'.$moka->otherTrxCode);
        $mokaData = $moka->getMokaData();
        $sendData = new MokaClient;
        $res = $sendData->sendData($mokaData);
        //$sendData->sendData($moka->getMokaData());
        return $res;
    }
}
```
