<?php
/**
  * filename
  *
  *
  *   ___                                                                
  *  /\_ \                                                               
  *  \//\ \     ___   _____      __    ___      __         ___    ___    
  *    \ \ \   /'___\/\ '__`\  /'__`\/' _ `\  /'_ `\      /'___\/' _ `\  
  *     \_\ \_/\ \__/\ \ \L\ \/\  __//\ \/\ \/\ \L\ \  __/\ \__//\ \/\ \ 
  *     /\____\ \____\\ \ ,__/\ \____\ \_\ \_\ \____ \/\_\ \____\ \_\ \_\
  *     \/____/\/____/ \ \ \/  \/____/\/_/\/_/\/___L\ \/_/\/____/\/_/\/_/
  *                     \ \_\                   /\____/                  
  *                      \/_/                   \_/__/   
  *                      
  * @package: packname
  * @author: lcp0578@gmail.com
  * @date: 2016-07-03 11:29:18
  * @version: 0.0.1
  * @copyright: http://lcpeng.cn
  */
require '../src/PHPDES.php';
$key = 'lcpengCN';
$encrypt = PHPDES::encrypt($key, 'lcpeng');
$decrypt = PHPDES::decrypt($key, $encrypt);