<?
    //讀取帳號資料
    $link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");

    
    
    $data=mysqli_query($link, "select * from account");
    $rs=mysqli_fetch_row($data);

    $account = $rs[0];
    $pass = $rs[1];
    $name = $rs[2];
    $email = $rs[4];
    $account_level = $rs[3];
    
 ?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>學生帳號資料</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
    <body>
        <br>
        <br>
        <form action="xxx.php" method="get">
            <table>
                <tr>
                    <td align="center" colspan="2"><legend>個人資料</legend></td>
                </tr>
                <tr>
                    <td align="center" width="50%">帳號</td>
                    <td align="center" width="50%"><? echo $account ?></td>
                </tr>
                <tr>
                    <td align="center" width="50%">姓名</td>
                    <td align="center" width="50%"><? echo $name ?></td>
                </tr>
                <tr>
                    <td align="center" width="50%">電子郵件</td>
                    <td align="center" width="50%"><? echo $email ?></td>
                </tr>
                <tr>
                    <td align="center" width="50%">會員身份</td>
                    <td align="center" width="50%">
                        <?
                            if($account_level == 1){
                                echo "管理者";
                            }elseif ($account_level == 2){
                                echo "教師";
                            }else{
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="student_accountchangepsd.php?a_id=<? echo $rs[0]; ?>" target="_blank" rel="noopener noreferrer">修改密碼</a></td>
                    
                </tr>
            </table>
        </form>
        <br>
        <br>
        
        <p align="center"><a href="student_accountdata.php?a_id=<? echo $rs[0]; ?>" target="_blank" rel="noopener noreferrer">修改資料</a></p>
           
    </body>
</html>