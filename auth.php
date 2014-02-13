<?
include "config.php";

session_start();
if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"]) && 
$_COOKIE["user"] == $user && $_COOKIE["pass"] == $pass)
{	
	$_SESSION["user"] = $user;
	$_SESSION["pass"] = $pass;
}

if(!isset($_SESSION["user"]) || !isset($_SESSION["pass"]) 
|| $_SESSION["user"] != $user ||  $_SESSION["pass"] != $pass)
{
header("location:login.php");
}

?>

