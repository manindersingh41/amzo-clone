<?php 
$lista = $_GET['lista'];
list($cc, $mes, $ano, $cvv) = explode('|', $lista);

// curls

$ch = curl_init();
$url = 'https://api.stripe.com/v1/payment_methods';
$post = 'type=card&card[number]=4535900216760782&card[cvc]=854&card[exp_month]=01&card[exp_year]=23&billing_details
         [name]=lev+nar&billing_details[email]=gejegir860%40zuperholo.com&billing_details
        [address][country]=HK&guid=ea03dca2-e3e0-4ad7-9077-91f2bcf56bf434ecdb&
         muid=f228d581-ef7d-416c-83b1-212ddeac6b04ae016f&sid=2cc93fdf-e983-48b8-ba2b-7bf4ac4cf6b9faacc0
         &key=pk_live_QIElfpmM8V8FMmz1TDHiPxTk00urgEgkVJ&payment_user_agent=stripe.js%2F77ea1694%3B+stripe-js-v3%2F77ea1694%3B+checkout';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIESESSION,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
':authority: api.stripe.com',
':method: POST',
':path: /v1/payment_methods',
':scheme: https',
'accept: application/json',
'accept-encoding: gzip, deflate',
'accept-language: en-US,en;q=0.9',
'content-length: '.strlen($post).'',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36
'
));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>