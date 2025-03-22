<?php

$connect = new mysqli("localhost","root","","pruebaticomart");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}