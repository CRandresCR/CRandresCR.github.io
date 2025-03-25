<?php

$connect = new mysqli("mysql://root:lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB@yamabiko.proxy.rlwy.net:26477/railway","root","lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB","railway");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}
