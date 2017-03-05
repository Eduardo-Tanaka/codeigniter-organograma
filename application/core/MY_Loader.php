<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader file extends CI_Loader
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $header  = $this->view('templates/header', $vars, $return); // header
        $body = $this->view($template_name, $vars, $return); // view
        $footer = $this->view('templates/footer', $vars, $return); // footer

        if ($return)
        {
            return $header;
            return $body;
            return $footer;
        }
    }
}