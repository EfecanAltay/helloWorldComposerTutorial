<?php
namespace HelloWorld;

class SayHello{

  public static function world(){
	return "HelloWorld , Composer !!";
  }

  public static function name($name){
	return "HelloWorld , ".$name ;
  }
}
