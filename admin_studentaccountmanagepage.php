<?
    //讀取帳號資料
    $link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");

    
    
    $data=mysqli_query($link, "select * from account");
    
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>帳號資料管理</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	</head>
    <body>
        <h1 align="center"><h15>帳號資料管理</h15></h1>
        
        <form action="xxx.php" method="post">
            <table border="1">
               <?$countstu=mysqli_query($link, "SELECT count(a_id) as stutotal from account where level = '3'");
                    $data1=mysqli_fetch_assoc($countstu);
                $countteach=mysqli_query($link, "SELECT count(a_id) as teachtotal from account where level = '2'");
                    $data2=mysqli_fetch_assoc($countteach);
                    ?>
                    
                <tr>
                    <td align="left" colspan="2">目前帳號資料：學生 <? echo $data1['stutotal'] ?> 筆 &nbsp;,&nbsp;教師 <? echo $data2['teachtotal'] ?> 筆&nbsp;&nbsp;
                    <a target="_blank" rel="noopener noreferrer"href="insert.php"><input type="button" value="新增帳號"></a>
                    </td>
                    
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td>
                     <form action="/action_page.php">
      <input type="text" placeholder="搜尋.." name="search">
    </form></td>
                </tr>
                <tr> 
                    <td align="center">身份</td>
                    <td align="center">姓名</td>
                    <td align="center">個人資料</td>
                    <td align="center">帳號</td>
                    <td align="center">密碼</td>
                    <td align="center">功能操作</td>
                </tr>

                <?php
                for($i=1;$i<=mysqli_num_rows($data);$i++){
                        $rs=mysqli_fetch_row($data);
                ?>
                
                <tr>
                    <td align="center">
                    <? if ($rs[3] == 1){
                        echo "管理者";
                    }elseif ($rs[3] == 2){
                        echo "教師";
                    }else {
                        echo "學生";
                }
                    ?></td>
                    <form method="post">
                        <td align="center"><? echo $rs[2]   ?></td></form>
                   <td align="center"><input type="button" value="點此"></td>
                   <td align="center"><? echo $rs[0];   ?></td>
                    <td align="center"><? echo $rs[1];   ?></td>
                    <td align="center">
                        <a href="update.php?a_id=<? echo $rs[0]; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="delete.php?a_id=<? echo $rs[0]; ?>" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?
                }
                ?>
                
                <tr>
                    <td align="center" colspan="6"><input type="button" value="顯示更多"></td>
                </tr>
            </table>
        </form>
    </body>
</html>