<?php



require "vendor/autoload.php";

$access_token = 'FPskvngDwQSqhyHhBqCS3adxBoEaU2iQRP/ni9ybUdaLj9XOfBz3py3q2FObJiQ/kASIkfLjeyjgtyB6kW/GGqAiXl9mHX+8ZiZ7cPOW2a1c8z1AN1j5AroZJRpzgIKZFW/Ak/AK653EbutbgGUFCwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '378c2f542a0216cee32336442fb4e208';

$pushID = 'U5ceb1489528b7f361dc06fffbc1b138d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







