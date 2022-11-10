<?php

namespace Paradiseofcode\MokaPayment\Requests;

class PaymentDealerRequest
{

    /**
     * @var string
     * @example "John Smith"
     */
    public string $cardHolderFullName;

    /**
     * @var string
     * @example "5127541122223332"
     */
    public string $cardNumber;

    /**
     * @var string
     * @example "01"
     */
    public string $expMonth;

    /**
     * @var string
     * @example "2023"
     */
    public string $expYear;

    /**
     * @var string
     * @example "342"
     */
    public string $cvcNumber;

    /**
     * @var string
     */
    public string $cardToken = "";

    /**
     * @var float
     * @example 0.01
     */
    public float $amount;

    /**
     * @var string
     * @example "USD","EUR","TL"
     */
    public string $currency = "TL";

    /**
     * @var int
     */
    public int $installmentNumber = 1;

    /**
     * @var string
     * @example "192.168.1.116"
     */
    public string $clientIP = "";

    /**
     * @var string
     * @example "202A101B14172139"
     */
    public string $otherTrxCode = "";

    /**
     * @var string
     */
    public string $subMerchantName = "";

    /**
     * @var int
     */
    public int $isPoolPayment = 0;

    /**
     * @var int
     */
    public int $isPreAuth = 0;

    /**
     * @var int
     */
    public int $isTokenized = 0;

    /**
     * @var int
     */
    public int $integratorId = 0;

    /**
     * @var string
     */
    public string $software = "Possimulation";

    /**
     * @var string
     */
    public string $description  = "";

    /**
     * @var int
     */
    public int $returnHash = 1;

    /**
     * @var string
     * @example "https://yourdomain.com/paymentDearlerTreeD?yourOrderCode=202A101B14172139"
     */
    public string $redirectUrl;

    /**
     * @var int
     */
    public int $redirectType = 0;

    /**
     * @var array
     * @example "BuyerFullName":"Ali Yılmaz, "BuyerGsmNumber":"5551110022", "BuyerEmail":"aliyilmaz@xyz.com", "BuyerAddress":"Tasdelen / Çekmeköy"
     */
    public string $buyerFullName = "";

    /**
     * @var string
     */
    public string $buyerGsmNumber = "";

    /**
     * @var string
     */
    public string $buyerEmail = "";

    /**
     * @var string
     */
    public string $buyerAddress = "";

    /**
     * @var integer
     */
    public int $dealerCustomerId = 0;

    /**
     * @var string
     */
    public string $customerCode = "";

    /**
     * @var string
     */
    public string $firstName = "";

    /**
     * @var string
     */
    public string $lastName = "";

    /**
     * @var int
     * @example Man = 1 , Woman = 2
     */
    public int $gender= 1;

    /**
     * @var string
     */
    public string $birthDate= "";

    /**
     * @var string
     */
    public string $gsmNumber= "";

    /**
     * @var string
     */
    public string $email= "";

    /**
     * @var string
     */
    public string $address= "";

    /**
     * @var string
     */
    public string $cardName= "";

    /**
     * @param string $cardHolderFullName
     */
    public function setCardHolderFullName(string $cardHolderFullName): void
    {
        $this->cardHolderFullName = $cardHolderFullName;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @param string $expMonth
     */
    public function setExpMonth(string $expMonth): void
    {
        $this->expMonth = $expMonth;
    }

    /**
     * @param string $expYear
     */
    public function setExpYear(string $expYear): void
    {
        $this->expYear = $expYear;
    }

    /**
     * @param string $cvcNumber
     */
    public function setCvcNumber(string $cvcNumber): void
    {
        $this->cvcNumber = $cvcNumber;
    }

    /**
     * @param string $cardToken
     */
    public function setCardToken(string $cardToken): void
    {
        $this->cardToken = $cardToken;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param int $installmentNumber
     */
    public function setInstallmentNumber(int $installmentNumber): void
    {
        $this->installmentNumber = $installmentNumber;
    }

    /**
     * @param string $clientIP
     */
    public function setClientIP(string $clientIP): void
    {
        $this->clientIP = $clientIP;
    }

    /**
     * @param string $otherTrxCode
     */
    public function setOtherTrxCode(string $otherTrxCode): void
    {
        $this->otherTrxCode = $otherTrxCode;
    }

    /**
     * @param string $subMerchantName
     */
    public function setSubMerchantName(string $subMerchantName): void
    {
        $this->subMerchantName = $subMerchantName;
    }

    /**
     * @param int $isPoolPayment
     */
    public function setIsPoolPayment(int $isPoolPayment): void
    {
        $this->isPoolPayment = $isPoolPayment;
    }

    /**
     * @param int $isPreAuth
     */
    public function setIsPreAuth(int $isPreAuth): void
    {
        $this->isPreAuth = $isPreAuth;
    }

    /**
     * @param int $isTokenized
     */
    public function setIsTokenized(int $isTokenized): void
    {
        $this->isTokenized = $isTokenized;
    }

    /**
     * @param int $integratorId
     */
    public function setIntegratorId(int $integratorId): void
    {
        $this->integratorId = $integratorId;
    }

    /**
     * @param string $software
     */
    public function setSoftware(string $software): void
    {
        $this->software = $software;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param int $returnHash
     */
    public function setReturnHash(int $returnHash): void
    {
        $this->returnHash = $returnHash;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl(string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @param int $redirectType
     */
    public function setRedirectType(int $redirectType): void
    {
        $this->redirectType = $redirectType;
    }

    /**
     * @param string $buyerFullName
     */
    public function setBuyerFullName(string $buyerFullName): void
    {
        $this->buyerFullName = $buyerFullName;
    }

    /**
     * @param string $buyerGsmNumber
     */
    public function setBuyerGsmNumber(string $buyerGsmNumber): void
    {
        $this->buyerGsmNumber = $buyerGsmNumber;
    }

    /**
     * @param string $buyerEmail
     */
    public function setBuyerEmail(string $buyerEmail): void
    {
        $this->buyerEmail = $buyerEmail;
    }

    /**
     * @param string $buyerAddress
     */
    public function setBuyerAddress(string $buyerAddress): void
    {
        $this->buyerAddress = $buyerAddress;
    }

    /**
     * @param string $dealerCustomerId
     */
    public function setDealerCustomerId(string $dealerCustomerId): void
    {
        $this->dealerCustomerId = $dealerCustomerId;
    }

    /**
     * @param int $customerCode
     */
    public function setCustomerCode(int $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param int $gender
     * @example Man: 1, Woman: 2
     */
    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @param string $gsmNumber
     */
    public function setGsmNumber(string $gsmNumber): void
    {
        $this->gsmNumber = $gsmNumber;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(string $cardName): void
    {
        $this->cardName = $cardName;
    }


}
