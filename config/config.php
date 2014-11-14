<?php



function connection_init(){
 
			$connections = array(
			   'development' => 'mysql://root@localhost/wspro',
			   'production' => 'mysql://username:password@localhost/production',
			   'test' => 'mysql://username:password@localhost/test'
			 );


 			\ActiveRecord\Config::initialize(function($cfg) use ($connections)
			 {

			     $cfg->set_model_directory('Model');
			     $cfg->set_connections($connections);
			     $cfg->set_default_connection('development');
			 });
}