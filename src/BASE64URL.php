<?php
/**
  * filename
  *
  * @package: packname
  * @author: lcp0578@gmail.com
  * @date: 2016-08-30 11:45:50
  * @version: 0.0.1
  * @copyright: http://lcpeng.cn
  */
class BASE64URL
{
    /**
     *     url   base64加密
     */
    function encode($input) {
        return strtr(base64_encode($input), '+/=', '-_,');
    }
    /**
     *    url   base64解密
     */
    function decode($input) {
        return base64_decode(strtr($input, '-_,', '+/='));
    }
}