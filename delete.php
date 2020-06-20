<?
$link = mysqli_connect("localhost", "root", "");
mysqli_query($link,"set names utf8");
mysqli_select_db($link,"accounts");
$sql = "DELETE from account where a_id =" .$_GET['a_id'];
mysqli_query($link, $sql);
mysqli_close($link);
header("Location:admin_studentaccountmanagepage.php");


    
?>