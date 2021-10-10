<?php

include 'vendor/autoload.php';

use \App\Test;

$test = new Test();
echo $test->hello();
echo '<br />';


$test2 = new Driver\Car();

echo $test2->move(300);


//$client = new \GuzzleHttp\Client();
//
//$response = $client->get('https://www.google.com/');
//echo $response->getBody()->getContents();