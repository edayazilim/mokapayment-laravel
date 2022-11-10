<?php

namespace Paradiseofcode\MokaPayment\Enums;

enum ResultCodeEnum: string
{
    case PaymentDealerCheckPaymentDealerAuthenticationInvalidRequest = "CheckKey hatalı ya da nesne hatalı ya da JSON bozuk olabilir.";
    case PaymentDealerCheckPaymentDealerAuthenticationInvalidAccount = "Böyle bir bayi bulunamadı.";
    case PaymentDealerCheckPaymentDealerAuthenticationVirtualPosNotFound = "Bu bayi için sanal pos tanımı yapılmamış.";
    case PaymentDealerCheckDealerPaymentLimitsDailyDealerLimitExceeded	 = "Bayi için tanımlı günlük limitlerden herhangi biri aşıldı.";
    case PaymentDealerCheckDealerPaymentLimitsDailyCardLimitExceeded = "Gün içinde bu kart kullanılarak daha fazla işlem yapılamaz.";
    case PaymentDealerCheckCardInfoInvalidCardInfo = "Kart bilgilerinde hata var.";
    case PaymentDealerDoDirectPayment3dRequestInvalidRequest = "JSON objesi yanlış oluşturulmuş.";
    case PaymentDealerDoDirectPayment3dRequestRedirectUrlRequired = "3D ödeme sonucunun döneceği RedirectURL verilmemiş.";
    case PaymentDealerDoDirectPayment3dRequestInvalidCurrencyCode = "Para birimi hatalı. (TL, USD, EUR şeklinde olmalı)";
    case PaymentDealerDoDirectPayment3dRequestInvalidInstallmentNumber = "Geçersiz taksit sayısı girilmiş 2-12 arası olmalıdır.";
    case PaymentDealerDoDirectPayment3dRequestInstallmentNotAvailableForForeignCurrencyTransaction = "Yabancı para ile taksit yapılamaz.";
    case PaymentDealerDoDirectPayment3dRequestForeignCurrencyNotAvailableForThisDealer = "Bayinin yabancı parayla ödeme izni yok.";
    case PaymentDealerDoDirectPayment3dRequestPaymentMustBeAuthorization = "Ön otorizasyon tipinde ödeme gönderilmeli.";
    case PaymentDealerDoDirectPayment3dRequestAuthorizationForbiddenForThisDealer = "Bayinin ön otorizasyon tipinde ödeme gönderme izni yok.";
    case PaymentDealerDoDirectPayment3dRequestPoolPaymentNotAvailableForDealer = "Bayinin havuzlu ödeme gönderme izni yok.";
    case PaymentDealerDoDirectPayment3dRequestPoolPaymentRequiredForDealer = "Bayi sadece havuzlu ödeme gönderebilir.";
    case PaymentDealerDoDirectPayment3dRequestTokenizationNotAvailableForDealer = "Bayinin kart saklama izni yok.";
    case PaymentDealerDoDirectPayment3dRequestCardTokenCannotUseWithSaveCard = "Kart saklanmak isteniyorsa Token gönderilemez.";
    case PaymentDealerDoDirectPayment3dRequestCardTokenNotFound	= "Gönderilen Token bulunamadı.";
    case PaymentDealerDoDirectPayment3dRequestOnlyCardTokenOrCardNumber	= "Hem kart numarası hem de Token aynı anda verilemez.";
    case PaymentDealerDoDirectPayment3dRequestChannelPermissionNotAvailable = "Bayinin bu kanaldan ödeme gönderme izni yok.";
    case PaymentDealerDoDirectPayment3dRequestIpAddressNotAllowed = "Bayinin IP kısıtlaması var, sadece önceden belirtilen IP den ödeme gönderebilir.";
    case PaymentDealerDoDirectPayment3dRequestVirtualPosNotAvailable = "Girilen kart için uygun sanal pos bulunamadı.";
    case PaymentDealerDoDirectPayment3dRequestThisInstallmentNumberNotAvailableForVirtualPos = "Sanal Pos bu taksit sayısına izin vermiyor.";
    case PaymentDealerDoDirectPayment3dRequestThisInstallmentNumberNotAvailableForDealer = "Bu taksit sayısı bu bayi için yapılamaz.";
    case PaymentDealerDoDirectPayment3dRequestDealerCommissionRateNotFound = "Bayiye bu sanal pos ve taksit için komisyon oranı girilmemiş.";
    case PaymentDealerDoDirectPayment3dRequestDealerGroupCommissionRateNotFound = "Üst bayiye bu sanal pos ve taksit için komisyon oranı girilmemiş.";
    case PaymentDealerDoDirectPayment3dRequestInvalidSubMerchantName = "Gönderilen bayi adı daha önceden Moka sistemine kaydedilmemiş.";
    case PaymentDealerDoDirectPayment3dRequestInvalidUnitPrice = "Satılan ürünler sepete eklendiyse, geçerli birim fiyatı girilmelidir.";
    case PaymentDealerDoDirectPayment3dRequestInvalidQuantityValue = "Satılan ürünler sepete eklendiyse, geçerli adet girilmelidir.";
    case PaymentDealerDoDirectPayment3dRequestBasketAmountIsNotEqualPaymentAmount = "Satılan ürünler sepete eklendiyse, sepet tutarı ile ödeme tutarı eşleşmelidir.";
    case PaymentDealerDoDirectPayment3dRequestBasketProductNotFoundInYourProductList = "Satılan ürünler sepete eklendiyse, geçerli ürün seçilmelidir.";
    case PaymentDealerDoDirectPayment3dRequestMustBeOneOfDealerProductIdOrProductCode =  "Satılan ürünler sepete eklendiyse, ürün kodu veya moka ürün ID si girilmelidir.";
    case PaymentDealerDoDirectPaymentThreeDRequired =  "Bayi için 3d ödeme gönderme zorunluluğu vardır, Non-3D ödeme gönderemez.";
    case EX = "Beklenmeyen bir hata oluştu";

}
