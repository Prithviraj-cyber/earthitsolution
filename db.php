<?php

	try{
		$con=new PDO("mysql:host=localhost;dbname=earthitsolution","root","");
	}
	catch(PDOExection $e){
		echo $e->getMessage();
	}
?>