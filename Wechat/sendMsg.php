<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2016/8/10
 * Time: 22:25
 */
class SendMsg{
    public function __construct( $number)
    {
        include "TopSdk.php";
        $code = "www.lrfun.com";
        $c = new TopClient();
        $c->appkey = "23431657";
        $c->secretKey = "1bb2abad78be4a3004647144797a5d32";
        $c->format = "json";
        $req = new AlibabaAliqinFcSmsNumSendRequest();
        $req->setRecNum("normal");
        $req->setSmsFreeSignName("验证注册");
        $req->getSmsParam("{\"code\":\"" . $code . "\",\"product\":
\"验证码\"}");
        $req->setRecNum($number);
        $req->setSmsTemplateCode("SMS_13031620");
        $resp = $c->execute($req);
        print_r($resp);
        return $resp;
    }
}
?>