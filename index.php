<?php


include_once('lib/SQL.php');
include_once('lib/curl_query.php');
include_once('lib/simple_html_dom.php');

require __DIR__ . '/vendor/autoload.php';

$html = curl_get('https://www.coupons.com/coupon-codes/stores');

echo $html;