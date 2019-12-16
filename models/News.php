<?php

namespace Models;

class News
{
    private $url = 'https://newsapi.org/v2/everything?';

    // public function __construct($search)
    // {
    //     echo __CLASS__;
    //     // $this->url = $url;
    //     $this->search = $search;
    // }

    public function getNews($search)
    {
        // $aContext = array(
        //     'http' => array(
        //         'proxy' => 'tcp://10.3.0.9:3128',
        //         'request_fulluri' => true,
        //     ),
        // );
        // $cxContext = stream_context_create($aContext);
        // $sFile = file_get_contents("https://newsapi.org/v2/top-headlines?country=ua&apiKey=ce8fd25f97ec4295b2c4852d1b4cea3f", False, $cxContext);
        // return $sFile;
        
        $today = date("Y-m-d");
        $proxi_ip = '10.3.0.9:3128';
        $url = $this->url . 'q=' . $search . '&from=' . $today . '&sortBy=publishedAt&apiKey=ce8fd25f97ec4295b2c4852d1b4cea3f';
        // $url='https://newsapi.org/v2/top-headlines?country=ua&apiKey=ce8fd25f97ec4295b2c4852d1b4cea3f';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_PROXY, $proxi_ip);     //отключить прокси
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data);
    }
}
