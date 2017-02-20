<?php

require '../src/OPENSSL.php';
$str = 'lcp0578@gmail.com';
$key = 'lcpeng';
$iv = 'lcp0578';
$encrypt = OPENSSL::encrypt($str, $key, $iv);
var_dump($encrypt);
$decrypt = OPENSSL::decrypt($encrypt, $key, $iv);
var_dump($decrypt);