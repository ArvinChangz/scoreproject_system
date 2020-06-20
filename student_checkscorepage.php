
    <?
$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");

$data=mysqli_query($link, "select * from uploadfile");
$rs=mysqli_fetch_row($data);

$data1=mysqli_query($link, "select * from score");
$rs1=mysqli_fetch_row($data1);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>紀錄及結果</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
    <body>
        <br>
        <h1 align="center"><h15>自動作弊神器</h15></h1>
        
        
        <br>
        <br>
        
        <form method="get" action="xxx.php">
            <table border="1">
                <tr>
                    <td align="center" width="20%">系統描述</td>
                    <td align="center" width="20%">需求規格</td>
                    <td align="center" width="20%">設計規格</td>
                    <td align="center" width="20%">系統文件（主）</td>
                    <td align="center" width="20%">其他描述</td>
                </tr>
                <tr>
                    <td align="center" width="20%"><a href="<? $rs[1] ?>">檔案下載</a></td>
                    <td align="center" width="20%"><a href="<? $rs[2] ?>">檔案下載</a></td>
                    <td align="center" width="20%"><a href="<? $rs[3] ?>">檔案下載</a></td>
                    <td align="center" width="20%"><a href="<? $rs[4] ?>">檔案下載</a></td>
                    <td align="center" width="20%"><a href="<? $rs[5] ?>">檔案下載</a></td>
                </tr>
            </table>
        </form>
        <br>
        <br>
         <form method="get" action="xxx.php">
            <table border="1">
                <tr>
                    <td align="center" width="12%">系統描述</td>
                    <td align="center" width="12%">需求規格</td>
                    <td align="center" width="12%">設計規格</td>
                    <td align="center" width="12%">功能創新性</td>
                    <td align="center" width="12%">功能實用性</td>
                    <td align="center" width="12%">系統技術性</td>
                    <td align="center" width="12%">介面親和性</td>
                    <td align="center" width="16%">內容豐富性</td>
                </tr>
                <tr>
                    <td align="center" width="12%"><? echo $rs1[1]?></td>
                    <td align="center" width="12%"><? echo $rs1[2]?></td>
                    <td align="center" width="12%"><? echo $rs1[3]?></td>
                    <td align="center" width="12%"><? echo $rs1[4]?></td>
                    <td align="center" width="12%"><? echo $rs1[5]?></td>
                    <td align="center" width="12%"><? echo $rs1[6]?></td>
                    <td align="center" width="12%"><? echo $rs1[7]?></td>
                    <td align="center" width="16%"><? echo $rs1[8]?></td>
                </tr>
             </table>
    
        </form>
</body>
</html>