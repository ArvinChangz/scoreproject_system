<?
$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");


    $data=mysqli_query($link, "select * from member");
    $rs=mysqli_fetch_row($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改資料</title>
</head>
<body>
    <form method="post" action="teacher_studentupdate.php">
        <table align="center">
            <tr>
                <td>學號：<input type="text" name="new_account" value="<? echo $rs[0] ?>"></td>
            </tr>
            <tr>
                <td>姓名：<input type="text" name="new_name" value="<? echo $rs[1] ?>"></td>
            </tr>
            <tr>
                <td>系級：<input type="text" name="new_class" value="<? echo $rs[2] ?>"></td>
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
    $newclass = @$_POST['new_class'];
        $sql = "update member m_id = $newaccount, m_name = $newname, m_class = $newclass where m_id =" .$_GET['m_id'];
    mysqli_query($link, $sql);
    
    
?>