<?php
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
defined('BASEPATH') or exit('No direct script access allowed');

class Covid19byvebriINDONESIA extends MY_Controller
{
    var $API ="";
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Curl");
        $this->API="https://api.kawalcorona.com/indonesia";
    }

    public function index()
    {
      $indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), TRUE);
      $prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),TRUE);
      // $host = json_decode(file_get_contents('https://bokusan.my.id/api/hospital'),TRUE);
        $data = array(
            'title' => 'Dashboard Covid 19 | Indonesia',
            // 'host'	=> $host,
						'indo'	=> $indo,
						'prov'	=> $prov,
        );
        $this->template_vebri->load('layout/templatecovid19byvebri', 'covid19byvebri/index', $data);
    }

    public function curl()
	  {
	        /* API URL */
        $url = 'https://api.kawalcorona.com/indonesia';
        /* Init cURL resource */
        $ch = curl_init($url);
        /* Array Parameter Data */
        $data = ['name'=>'', 'positif'=>''];
        /* pass encoded JSON string to the POST fields */
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(

                    'Content-Type:application/json',

                    'App-Key: 123456',

                    'App-Secret: 1233'

                ));
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        /* execute request */
        $result = curl_exec($ch);

           print_r($result);
           echo "$result";
        /* close cURL resource */
        curl_close($ch);
	}
}
