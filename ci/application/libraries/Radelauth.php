<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Radelauth{

    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
    }

    public function password($pwd) {
        return md5('alp' . md5($pwd) . 'tmr');
    }

}
