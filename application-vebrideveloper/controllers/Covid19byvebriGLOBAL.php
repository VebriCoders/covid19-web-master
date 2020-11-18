<?php
#=======================================================|
# Simple Code By Pradana Industries By.vebritok_blo     |
#=======================================================|
defined('BASEPATH') or exit('No direct script access allowed');

class Covid19byvebriGLOBAL extends MY_Controller
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
        $neg = json_decode(file_get_contents('https://api.kawalcorona.com/'),TRUE);
        $glob_pos = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), TRUE);
        $glob_semb = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), TRUE);
        $glob_meni = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), TRUE);
        $data = array(
            'title' => 'Dashboard Covid 19 | Global',
            'glob_pos'	=> $glob_pos,
						'glob_semb'	=> $glob_semb,
						'glob_meni'	=> $glob_meni,
						'neg'	=> $neg,
        );
        $this->template_vebri->load('layout/templatecovid19byvebri', 'covid19byvebri/global', $data);
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
