<?php

use Ghasedak\GhasedakApi;
use Ipe\Sdk\Facades\SmsIr;

function imageUrl($image)
{
    return env('ADMIN_PANEL_URL') . env('PRODUCT_IMAGES_PATH') . $image;
}

function salePercent($price, $salePrice)
{
    return round((($price - $salePrice) / $price) * 100);
}

function sendOtpSms($cellphone,$code)
{
    $templateId = 262288; // شناسه الگو
    $parameters = [
        [
            "name"=>"CODE",
            "value"=>$code
        ]
    ];

    $response = SmsIr::verifySend($cellphone, $templateId, $parameters);

}
