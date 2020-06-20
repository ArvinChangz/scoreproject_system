<?
$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增帳號</title>
</head>
<body>
    <form method="post" action="insert.php">
        <table align="center">
            <tr>
                <td>帳號：<input type="text" name="new_account"></td>
            </tr>
            <tr>
                <td>密碼：<input type="text" name="new_password"></td>
            </tr>
            <tr>
                <td>姓名：<input type="text" name="new_name"></td>
            </tr>
            <tr>
                <td>Email：<input type="text" name="new_email"></td>
            </tr>
            <tr>
                <td>身份：<br>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="new_level" value="1">管理者<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="new_level" value="2">教師<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="new_level" value="3">學生</td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="提交">
                <input type="reset" value="清除"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?
    $newaccount = @$_POST['new_account'];
    $newpass = @$_POST['new_password'];
    $newname = @$_POST['new_name'];
    $newlevel = @$_POST['new_level'];
    $newemail = @$_POST['new_email'];
    mysqli_query($link, "insert into account(a_id,password,name,level,email) values ('$newaccount','$newpass','$newname','$newlevel','$newemail')")
    
?>
