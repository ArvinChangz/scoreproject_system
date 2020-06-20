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
    <form method="post" action="teacher_studentinsert.php">
        <table align="center">
            <tr>
                <td>學號：<input type="text" name="new_id"></td>
            </tr>
            <tr>
                <td>姓名：<input type="text" name="new_name"></td>
            </tr>
            <tr>
                <td>系級：<input type="text" name="new_class"></td>
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
    $newaccount = @$_POST['new_id'];
    
    $newname = @$_POST['new_name'];
   
    $newclass = @$_POST['new_class'];
    mysqli_query($link, "insert into member(m_id,m_class,m_name) values ('$newaccount','$newclass','$newname')")
    
?>
