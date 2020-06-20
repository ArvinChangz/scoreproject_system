<?
$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");

$data=mysqli_query($link, "select * from uploadfile");
$rs=mysqli_fetch_row($data);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>自動作弊神器</title>
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
        
        <form action="teacher_studentsystempage.php" method="post">
            <table border="1">
                <tr>
                    <td align="center" colspan="6">文件初稿</td>
                </tr>
                <tr>
                    <td align="center" colspan="2" >系統描述</td>
                    <td align="center" colspan="2" >需求規格</td>
                    <td align="center" colspan="2" >設計規格</td>
                </tr>
                <tr>
                    <td align="center" colspan="2" ><select align="center">
                        <option value="" name="descrip_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="descrip_score">A</option>
                        <option value="90" name="descrip_score">B</option>
                        <option value="80" name="descrip_score">C</option>
                        <option value="70" name="descrip_score">D</option>
                        <option value="60" name="descrip_score">E</option>
                        <option value="50" name="descrip_score">F</option>
                        </select></td>
                     <td align="center" colspan="2" ><select align="center">
                        <option value="" name="need_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="need_score">A</option>
                        <option value="90" name="need_score">B</option>
                        <option value="80" name="need_score">C</option>
                        <option value="70" name="need_score">D</option>
                        <option value="60" name="need_score">E</option>
                        <option value="50" name="need_score">F</option>
                        </select></td>
                     <td align="center" colspan="2" ><select align="center">
                        <option value="" name="design_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="design_score">A</option>
                        <option value="90" name="design_score">B</option>
                        <option value="80" name="design_score">C</option>
                        <option value="70" name="design_score">D</option>
                        <option value="60" name="design_score">E</option>
                        <option value="50" name="design_score">F</option>
                        </select></td>
                </tr>
                <tr>
                    <td align="center" colspan="6"><br></td>
                </tr>
                <tr>
                    <td align="center" colspan="6">系統功能</td>
                </tr>
                <tr>
                    <td align="center" width="16%">功能創新性
                    </td>
                    <td align="center" width="16%">功能實用性
                    </td>
                    <td align="center" width="16%">系統技術性
                    </td>
                    <td align="center" width="16%">介面親和性
                    </td>
                    <td align="center" width="16%">內容豐富性
                    </td>
                    <td align="center" width="20%">是否需要補驗收</td>
                </tr>
                <tr>
                    <td align="center"><select align="center">
                        <option value="" name="newthing_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="newthing_score">A</option>
                        <option value="90" name="newthing_score">B</option>
                        <option value="80" name="newthing_score">C</option>
                        <option value="70" name="newthing_score">D</option>
                        <option value="60" name="newthing_score">E</option>
                        <option value="50" name="newthing_score">F</option>
                        </select></td>
                    <td align="center"><select align="center">
                        <option value="" name="useful_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="useful_score">A</option>
                        <option value="90" name="useful_score">B</option>
                        <option value="80" name="useful_score">C</option>
                        <option value="70" name="useful_score">D</option>
                        <option value="60" name="useful_score">E</option>
                        <option value="50" name="useful_score">F</option>
                        </select></td>
                    <td align="center"><select align="center">
                        <option value="" name="skill_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="skill_score">A</option>
                        <option value="90" name="skill_score">B</option>
                        <option value="80" name="skill_score">C</option>
                        <option value="70" name="skill_score">D</option>
                        <option value="60" name="skill_score">E</option>
                        <option value="50" name="skill_score">F</option>
                        </select></td>
                    <td align="center"><select align="center">
                        <option value="" name="friendly_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="friendly_score">A</option>
                        <option value="90" name="friendly_score">B</option>
                        <option value="80" name="friendly_score">C</option>
                        <option value="70" name="friendly_score">D</option>
                        <option value="60" name="friendly_score">E</option>
                        <option value="50" name="friendly_score">F</option>
                        </select></td>
                    <td align="center"><select align="center">
                        <option value="" name="many_score" selected disabled hidden>請選擇</option>
                        <option value="100" name="many_score">A</option>
                        <option value="90" name="many_score">B</option>
                        <option value="80" name="many_score">C</option>
                        <option value="70" name="many_score">D</option>
                        <option value="60" name="many_score">E</option>
                        <option value="50" name="many_score">F</option>
                        </select></td>
                    <td align="center">
                        
                        <input type="radio"
                   name="need_again" value="1"/>
            <label for="qa">是</label>
                        
                        <input type="radio"
                   name="need_again" value="0" checked/>
                            <label for="qn">否</label>
                    </td>
                </tr>
                
            <tr>
                <td align="center" width="16%"></td>
                <td align="center" width="16%"></td>
                <td align="center" width="18%"><input type="submit" value="送出"></td>
                <td align="center" width="18%"><input type="reset" value="重設"></td>
                <td align="center" width="16%"></td>
                <td align="center" width="16%"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?
    $descrip_score = @$_POST['descrip_score'];
    $need_score = @$_POST['need_score'];
    $design_score = @$_POST['design_score'];
    $newthing_score = @$_POST['newthing_score'];
    $useful_score = @$_POST['useful_score'];
    $skill_score = @$_POST['skill_score'];
    $friendly_score = @$_POST['friendly_score'];
    $many_score = @$_POST['many_score'];
    $need_again = @$_POST['need_again'];
    mysqli_query($link, "insert into score(descrip_score, need_score, design_score, newthing_score, useful_score, skill_score, friendly_score, many_score, need_again) values ('$descrip_score','$need_score','$design_score','$newthing_score','$useful_score', '$skill_score', '$friendly_score', '$many_score', '$need_again')") 
    
?>