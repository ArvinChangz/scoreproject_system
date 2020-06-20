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
    <title>修改帳號</title>
</head>
<body>
    <form method="post" action="update.php">
        <table align="center">
            <tr>
                <td>帳號：<input type="text" name="new_account" value="<? echo $rs[0] ?>"></td>
            </tr>
            <tr>
                <td>姓名：<input type="text" name="new_name" value="<? echo $rs[2] ?>"></td>
            </tr>
            <tr>
                <td>Email：<input type="text" name="new_email" value="<? echo $rs[4] ?>"></td>
            </tr>
            <tr>
                <td>身份：<input type="text" name="new_level" value="<? echo $rs[3] ?>"></td>
                         
                    
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
    $newname = @$_POST['new_name'];
    $newlevel = @$_POST['new_level'];
    $newemail = @$_POST['new_email'];
        $sql = "update account a_id = $newaccount, name = $newname, level = $newlevel, email=$newemail where a_id =" .$_GET['a_id'];
    mysqli_query($link, $sql);
    
    
?>