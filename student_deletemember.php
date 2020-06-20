<?
$link = mysqli_connect("localhost", "root", "");
mysqli_query($link,"set names utf8");
mysqli_select_db($link,"accounts");
$sql = "DELETE from member where m_id =" .$_GET['m_id'];
mysqli_query($link, $sql);
mysqli_close($link);
header("Location:student_groupmemberpage.php");


    
?>