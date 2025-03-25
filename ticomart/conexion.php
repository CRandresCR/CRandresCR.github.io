<?php

$connect = new mysqli("mysql://root:lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB@yamabiko.proxy.rlwy.net:26477/railway","mysql.railway.internal","lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB","railway");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}
