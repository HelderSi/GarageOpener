<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
</head>
<body>
<?
include "auth.php";
if($authinticated && isset($_POST["gpio"]))
{
	exec("sudo ./gpioExport.sh");
?>
<center><h1>Done!
<?
}
else
{
?>

<form method="post">
<center><button style="font-size:50px;height:400px; width:420px" name="gpio">EXPORT</button>
</form>
<?
}
?>
</body>
</html>
