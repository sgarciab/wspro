<?php

namespace WSPRO;



class Requester
{


		public $url;



		public $uri; 



		public $path;



	function __construct() {

	try{
      	$this->url=$_SERVER['REQUEST_URI'];
		$this->uri=split('/',$this->url);

		if(!isset($_SERVER['PATH_INFO']))
			 throw new \Exception('No se encuentra algun Modelo descrito en el URL');
		$this->path=split('/', $_SERVER['PATH_INFO']);
		unset($this->uri[0]);
		unset($this->path[0]);

		$this->request();

	}catch(\Exception $e){
		 echo 'Error: ',  $e->getMessage(), "\n";
	}

   }



   function request(){

		$method=$_SERVER['REQUEST_METHOD'];

		try{

	 		if (!include_once('/Controller/'.$this->path[1].'.php'))
	 			throw new \Exception('No se encuetra el archivo: '.$this->path[1].'.php');

	 		if(!class_exists($this->path[1]))
	 			throw new \Exception('No se encuetra la clase: '.$this->path[1].'.php');


	 		if (!include_once('/Core/Controller.php'))
	 			throw new \Exception('Core del API DAÑADO, descargue nuevamente. ');

			$objeto=new $this->path[1];
			$method=strtolower($method);
			if ($method==="get"){
				if(isset($this->path[2]))
					$objeto->$method($this->path[2]);
				else
				{
					
					$method=$method.'All';
					$objeto->$method();	
				}
			}
			else
			$objeto->$method();		
			


		}catch(\Exception $e){
				 echo 'Error: ',  $e->getMessage(), "\n";
		}

   }

}

?>
