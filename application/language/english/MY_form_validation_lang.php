<?php
defined('BASEPATH') OR exit('No direct script access allowed');
public $CI;
public function __construct($rules = array()) {
parent::__construct($rules);
$this->CI->lang->load('MY_form_validation');
} 
