<?php
	spl_autoload_register(function($classname){
		include 'HelloWorld/' . $classname . '.php';
	});

?>
