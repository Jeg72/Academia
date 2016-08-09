<?php
	$link =mysql_connect("localhost","root","181014");
	if($link){
		mysql_select_db("academia",$link);
	}
?>