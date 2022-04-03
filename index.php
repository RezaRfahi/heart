<?php
require 'vendor/autoload.php';

use heart\Love;

$love=new Love('leyla');

$love->printNameofLove();

echo '<br><br><br>';

$http=new \GuzzleHttp\Client();

$req=$http->request('GET','https://jsonplaceholder.typicode.com/users');

$res=$req->getBody();

echo $res;