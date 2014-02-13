<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
</head>
<body>
<?php
include "auth.php";
if (isset($_POST["RightOPEN"]))
{
exec("sudo ./open.sh");
}
?>
<form method="post">
<center><button style="font-size:50px;height:400px; width:420px" name="RightOPEN">افتح</button><br>
</form>



</body>
</html>
