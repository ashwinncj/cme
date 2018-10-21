<?php

class Mailer extends CI_Model {

    private $username = 'radel';
    private $password = 'a1625c9558cf2d11bba6aaf760d21f24-us19';
    private $endpoint = 'https://us19.api.mailchimp.com/3.0/';

    //Use this method to implement the mailer function from the controller.
    //
//        $this->load->model('mailer');
//        $data['email_address']='ea@f.com';
//        $data['status']='subscribed';
//        $merge_fields['FULLNAME']='Fullname';
//        $merge_fields['COMPANY']='Company';
//        $data['merge_fields']=$merge_fields;
//        $this->mailer->api_post('lists/49732d0bc7/members',$data);
// 
    public function api_post($urlsuffix, $postdata) {
        $postdata = json_encode($postdata);
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $this->endpoint . $urlsuffix);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
        curl_setopt($process, CURLOPT_HEADER, 1);
        curl_setopt($process, CURLOPT_USERPWD, $this->username . ":" . $this->password);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($process);
        curl_close($process);
        print_r($return);
    }

    public function mailgun($to,$subject,$text) {
        $username = '';
        $password = '';
        $url = '';        
        $params=['from'=>'ashwin@mail.radel.site','to'=>$to,'subject'=>$subject,'text'=>$text];        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}
