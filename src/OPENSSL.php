<?php


class OPENSSL
{
    private static $secretKey = 'ThisIsYouSecretKey';
    // 初始化向量， Initialization Vector
    private static $secretIv = 'ThisIsYouSecretIv';
    // The cipher method. 
    // For a list of available cipher methods, use openssl_get_cipher_methods().
    private static $method = 'AES-256-CBC';
    
    public static function encrypt($string, $secretKey = '', $secretIv = '', $method = '') {
        
        $secretKey = empty($secretKey) ? self::$secretKey : $secretKey;
        $secretIv = empty($secretIv) ? self::$secretIv : $secretIv;
        $method = empty($method) ? self::$method : $method;
    
        // hash
        $key = hash('sha256', $secretKey);
    
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secretIv), 0, 16);
        return base64_encode(openssl_encrypt($string, $method, $key, 0, $iv));
    }
    
    public static function decrypt($string, $secretKey = '', $secretIv = '', $method = '')
    {
        $secretKey = empty($secretKey) ? self::$secretKey : $secretKey;
        $secretIv = empty($secretIv) ? self::$secretIv : $secretIv;
        $method = empty($method) ? self::$method : $method;
        
        // hash
        $key = hash('sha256', $secretKey);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secretIv), 0, 16);
        return openssl_decrypt(base64_decode($string), $method, $key, 0, $iv);
    }
}