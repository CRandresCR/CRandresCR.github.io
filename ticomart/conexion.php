<?php

$connect = new mysqli("mysql.railway.internal","root","lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB","railway");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}
