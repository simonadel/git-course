
<?php require 'head.php'?>



<?php

$admins = array("simon" ,"karmina","assma" );
$em = array("gad012@gmail.com" ,"kad012@gmail.com","dad012@gmail.com" );

$username=$_GET['name'];
$ename=$_GET['email'];

if (in_array($username, $admins) && in_array($ename, $em)) {


	echo " welcome ". $username." to control panel "."<br>";
		echo " welcome ". $ename." to control panel ";
		

	header('REFRESH:5;URL=index.php');
	// code...
}

else
		echo "sorray this username is not exits";
	header('REFRESH:5;URL=index.php');
