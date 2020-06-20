<?
$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");
$data=mysqli_query($link, "select * from account");
    $rs=mysqli_fetch_row($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密碼</title>
    
    <form action="student_accountchangepsd.php" method="post">
        <table align="center">
            <tr>
                <td align="center">密碼：<input type="text" name="new_password" value="<? echo $rs[1] ?>"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</head>
<body>
    
</body>
</html>


<?
    
    $newpass = @$_POST['new_password'];
    
        $sql = "update account password = $newpass where a_id =" .$_GET['a_id'];
    mysqli_query($link, $sql);
    
    
?>