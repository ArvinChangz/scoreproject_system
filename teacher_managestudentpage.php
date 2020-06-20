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
		<title>教師管理專頁</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
    <body>
          <h1 align="center"><h15>學生資料管理</h15></h1>
        <a target="_blank" rel="noopener noreferrer"href="teacher_studentinsert.php"><input type="button" value="新增帳號"></a>
        <br>
        <form action="xxx.php" method="get">
            <table border="1"  id="table">
                <tr>
                    <td align="center">系級</td>
                    <td align="center">姓名</td>
                    <td align="center">組員名單</td>
                    <td align="center">學號</td>
                    <td align="center">資料修改</td>
                </tr>
                <?php
                for($i=1;$i<=mysqli_num_rows($data);$i++){
                        $rs=mysqli_fetch_row($data);
                ?>
                 <tr id="tr">
                    <td align="center" id="td"><? echo $rs[1] ?></td>
                    <td align="center" id="td"><? echo $rs[2]?></td>
                    <td align="center" ><input type="button" value="查看" onclick="groupmember1()"></td>
                        <script>
                            function groupmember1() {
                                alert("我愛二條柴 我愛三條柴 我愛四條柴 我愛五條柴");
                            }
                        </script>
                    <td align="center" id="td">
                           <? echo $rs[0] ?>
                        </td>
                     <td align="center"><a href="teacher_studentupdate.php?m_id<? echo $rs[0]; ?>" target="_blank" rel="noopener noreferrer"><input id="gai" type="button" value="修改" onclick=""></a>
                        <a href="teacher_studentdelete.php?m_id=<? echo $rs[0]; ?>" ><input id="gai" type="button" value="刪除" onclick=""></a>
                    </td>
                </tr>
                <?
                }?>
                <tr>
                    <td align="center" colspan="5"><input type="button" value="載入更多"></td>
                </tr>
            </table>
        </form>
    </body>
</html>