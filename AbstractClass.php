<?php
//declaring the parent class
abstract class AbstractClass{


//declaring my variables	
	var $sname;
	var $uname;
	var $password;
	var $db_name;
	var $idnumber;
	var $paymentOption;
	var $destination;

//declaring functions
abstract public function Print($sname,$uname,$password,$db_name,$idnumber,$paymentOption,$destination);

							
}

?>