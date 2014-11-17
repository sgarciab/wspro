<?php

namespace WSPRO;



class Controller{
	function __construct(){
		//aqui podria leer todos los archivos que stan en el model e incluirlos uno por uno, tendria que hacer con un directory reader 
	}

	function getBodyRequest(){

		$request_body = file_get_contents('php://input');
		return(json_decode($request_body));

	}




	
}