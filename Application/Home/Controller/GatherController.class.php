<?php
namespace Home\Controller;
use Think\Controller;
class GatherController extends Controller{
    public function index(){
    $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"www.cnbeta.com");
        curl_setopt($ch,CURLOPT_REFERER,1);
        curl_exec($ch);
        curl_close($ch);

}
}