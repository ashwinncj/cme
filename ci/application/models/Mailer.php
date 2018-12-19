<?php

class Mailer extends CI_Model {

    public function mailgun($to, $subject, $text) {
        $url = 'http://mailer.constructme.ae/mailer.php';
        //$url = 'localhost/cme-mailer/mailer.php';
        $from = 'ConstructMe <mail@mail.constructme.ae>';
        $params = ['from' => $from, 'to' => $to, 'subject' => $subject, 'html' => $text,'h:Reply-To'=>'technical@constructme.ae'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $result = curl_exec($ch);
        //print_r($result);
        curl_close($ch);
    }
}
