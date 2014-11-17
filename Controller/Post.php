<?php

include_once('/Core/Controller.php');
include_once('/Model/Model_Post.php');



class Post extends WSPRO\Controller{
	function __construct(){
			
	}


	function getAll(){
		
		$post=new Model_Post();
		$post=$post->find('all');
		var_dump($post);
		echo json_encode($post);
	
	}

	function get($id){
		
		$post=new Model_Post();
		$post=$post->find(1);
		var_dump($post);
		echo json_encode($post);
	}

	function post(){

		$request=parent::getBodyRequest();
			var_dump($request);
	}

	function put(){

		
	}


}