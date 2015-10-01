<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Session_tools {

    public function is_logged()
    {
        if ( isset($_SESSION['logado']) ) {
            return true;
        }
        return false;
    }
}