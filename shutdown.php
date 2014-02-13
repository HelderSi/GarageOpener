<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
</head>
<body>
<?php
//start_session();
//if(isset($_SESSION["user"]) && isset($_SESSION["pass"]) && $_SESSION["user"]=="baab" && $_SESSION["pass
include "auth.php";
if (isset($_POST["shutdown"]))
{
exec("sudo ./shutdown.sh");
}
?>
<form method="post">
<center><button style="font-size:50px;height:400px; width:420px" name="shutdown">Shutdown</button><br>
</form>



</body>
</html>
