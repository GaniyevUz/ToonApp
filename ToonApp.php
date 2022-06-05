<?php

/**
 * @publisher Jakhongir Ganiev (https://ganiyev.uz)
 * @license MIT
 * @date 06/05/2022 03:17 PM
 * @Telegram: @JakhongirGaniev
 * @phone +998943024672 
 */

namespace GaniyevUz\Toon;

class ToonApp
{
    private $response;

    function __construct($source)
    {
        $url  = 'https://cartoon.lyrebirdstudio.net/v1/process';
        $ch   = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $headers    = array();
        $headers[]  = 'Host: cartoon.lyrebirdstudio.net';
        $headers[]  = 'X-AB-Model: cartoon2';
        $headers[]  = 'X-Client-OS: apple';
        $headers[]  = 'Accept: */*';
        $headers[]  = 'X-Cartoon-Token: dUB1Yng1FKeaimyJCcySsXXblb42mUuvqsQfh';
        $headers[]  = 'Content-Type: multipart/form-data';
        $headers[] = 'User-Agent: Cartoon/2.0.55 (com.lyrebirdstudio.cartoon; build:3; iOS 15.4.1) Alamofire/5.6.0';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS,["image"=> $source]);
        $this->response = curl_exec($ch);
        curl_close($ch);
        file_put_contents('1.jpg', $this->response);
    }
    public function execute($target='ToonApp.png')
    {
        file_put_contents($target, $this->response);
        return 'Saved in '. $target;
    }
}
