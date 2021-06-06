<?php
try {
 	$vt=new pdo("mysql:host=localhost;dbname=oklproje","root","");
 } catch (PDOException $e) {
 	echo $e-> getMessage();
 } 

 ?>