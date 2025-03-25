<?php

$connect = new mysqli("mysql://root:lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB@mysql.railway.internal:3306/railway","root","lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB","railway");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}
