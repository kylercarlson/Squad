<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  protected $layout = 'layout/base';
  protected $stylesheets = array(
    'global.css',
    'header.css',
    'footer.css',
    'typography.css'
  );
  protected $javascripts = array(
    'jquery-3.1.0.min.js',
    'global.js',
  );

  protected $local_stylesheets = array();
  protected $local_javascripts = array();

  function __construct() {
    parent::__construct();
  }

  protected function render( $content ) {
    $data = array(
      'content' => $content,
      'stylesheets' => $this->get_stylesheets(),
      'javascripts' => $this->get_javascripts()
    );

    echo $this->load->view( $this->layout, $data, true );
  }

  protected function get_stylesheets() {
    return array_merge( $this->stylesheets, $this->local_stylesheets );
  }

  protected function get_javascripts() {
    return array_merge( $this->javascripts, $this->local_javascripts );
  }
}
