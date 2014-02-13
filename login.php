<?
include "config.php";
session_start();
if(!isset($_POST["user"]) || !isset($_POST["pass"]) || $_POST["user"] != $user || $_POST["pass"] != $pass)
{
?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="login.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="user" type="text" id="user"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="pass" type="text" id="pass"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<?
}
else
{
$_SESSION["user"] = $_POST["user"];
$_SESSION["pass"] = $_POST["pass"];
setcookie("user", $_POST["user"], time()+60*60*24*30*12);
setcookie("pass", $_POST["pass"], time()+60*60*24*30*12);
header("location:index.php");
}
?>
