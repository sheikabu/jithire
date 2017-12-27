<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custom loader file extends CI_Loader
 */
 
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
    	if($return):
        $content  = $this->view('common/header_inner', $vars, $return); // header
        //$content  .= $this->view('common/leftmenu', $vars, $return);
        $content  .= $this->view($template_name, $vars, $return); // view
       // $content  .= $this->view('common/footer_inner', $vars, $return); // footer

        return $content;

        else:
            $CI->load->view('common/header_inner', $vars);
            $CI->load->view($template_name, $vars);
            //$CI->load->view('templates/footer', $vars);

        endif;
    }
}