<?
    //讀取帳號資料
    $link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");

    
    
    $data=mysqli_query($link, "select * from member");
    
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>組員管理</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
    <body>
        <h1 align="center"><h15>組員管理</h15></h1>
        
    <br>
        <form action="xxx.php" method="get">
            <table border="1">
                <td align="center">歡迎 , AnDY , 您已被確認為<strong>組長</strong></td>
            </table>
            </form>
        
        <br>
        <br>
        <br>
        <form action="xxx.php" method="post">
            <table border="1" id="myTable">
              <tr>
                    <td align="center" colspan="4">組員更改及確認</td>
                </tr>
               
                
                <tr>
                    <td width="25%" align="center">系級</td>
                    <td width="25%" align="center">學號</td>
                    <td width="25%" align="center">姓名</td>
                    <td width="25%" align="center">操作</td>
                </tr>
                <?php
                for($i=1;$i<=mysqli_num_rows($data);$i++){
                        $rs=mysqli_fetch_row($data);
                ?>
                <tr>
                    <td width="25%" align="center"><? echo $rs[1]?></td>
                    <td width="25%" align="center"><? echo $rs[0]?></td>
                    <td width="25%" align="center"><? echo $rs[2]?></td>
                    <td width="25%" align="center"><a href="student_deletemember.php?m_id=
                    <? echo $rs[0]; ?>" ><input type="button" value="刪除"></a></td>
                </tr>
                <?
                }?>
            </table>
            <table border="1">
                <tr>
                    
                    <td width="100%" align="center"><a href="student_addmember.php?m_id<? echo $rs[0]; ?>" target="_blank" rel="noopener noreferrer"><input type=button value="新增組員"></a></td>
                    
                    
                </tr>
                
            </table>
        </form>
    </body>
</html>
