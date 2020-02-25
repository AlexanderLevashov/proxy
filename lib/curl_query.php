<?php

function curl_get($url, $referer = 'http://www.google.com') { // , $referer = 'http://www.google.com' in order to exist or not
    //$url = 'http://dynupdate.no-ip.com/ip.php';
    //$proxy = '188.187.152.61';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_HEADER, 0); // 0 or 1
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36");
    //curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 0);
    //curl_setopt($ch, CURLOPT_PROXY, '66.96.200.39:80');
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;

}