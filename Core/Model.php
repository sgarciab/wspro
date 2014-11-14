<?php

namespace WSPRO;
require_once '/Modules/php-activerecord/ActiveRecord.php';
include_once '/config/config.php';

class Model_WSPRO extends \ActiveRecord\Model{



	function __construct(){
		connection_init();
		parent::__construct();
	}

}