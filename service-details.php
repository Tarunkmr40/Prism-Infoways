<?php
if(isset($_GET["p"])){
	$p = $_GET['p'];


	if($p == "web design")
	{
      include_once("pages/webdesign.php");
	}
	else if($p == "web development")
	{
      include_once("pages/webdevelop.php");
	}
	else if($p == "responsive website")
	{
      include_once("pages/responsiveweb.php");
	}
	else if($p == "mobile application")
	{
      include_once("pages/mobileapp.php");
	}
	else if($p == "ecommerce development")
	{
      include_once("pages/ecommerce.php");
	}
	else if($p == "software development")
	{
      include_once("pages/softwaredevelopment.php");
	}
	else if($p == "php development")
	{
      include_once("pages/phpdevelopment.php");
	}
	else if($p == "cms development")
	{
      include_once("pages/cmsdevelopement.php");
	}
	else
	{
        include_once("pages/webdesign.php");
	}
}
else{
	include_once("pages/webdesign.php");
}
?>