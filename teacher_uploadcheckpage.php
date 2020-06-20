<?
$link1 = mysqli_connect("localhost", "root", "");
mysqli_query($link1,"set names utf8");
mysqli_select_db($link1,"accounts");
$data1=mysqli_query($link1, "select * from member");
$rs1=mysqli_fetch_row($data1);
                                     ?> 



<!DOCTYPE HTML>
<html>
	<head>
		<title>教師專題評分專頁</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script>
        function toggleClock() {
    // get the clock
    var myClock = document.getElementById('clock');

    // get the current value of the clock's display property
    var displaySetting = myClock.style.display;

    // also get the clock button, so we can change what it says
    var clockButton = document.getElementById('clockButton');

    // now toggle the clock and the button text, depending on current state
    if (displaySetting == 'block') {
      // clock is visible. hide it
      myClock.style.display = 'none';
      // change button text
      clockButton.innerHTML = 'Show clock';
    }
    else {
      // clock is hidden. show it
      myClock.style.display = 'block';
      // change button text
      clockButton.innerHTML = 'Hide clock';
    }
  }
        </script>
	</head>
    <body>
        <h1 align="center"><h15>教師專題評分專頁</h15></h1>
        
        <form action="xxx.php" method="get">
            <table border="1">
                <tr>
                    <td align="center">上傳時間</td>
                    <td align="center">系統名稱</td>
                    <td align="center">成員名單</td>
                    <td align="center">審核狀況</td>
                    <td align="center">成績</td>
                </tr>
                <tr>
                    <td align="center">2018.11.11 &nbsp;&nbsp; 19:26:32</td>
                    <td align="center"><input type="button" onclick="toggleClock()" id="clockButton" value="自動作弊神器"></td>
                    <td align="center"><input type="button" value="查看" onclick="groupmember1()"></td>
                        <script>
                            function groupmember1() {
                                alert("<? echo $rs1[2]?>");
                            
                        </script>
                    <td width="20%" align="center"><i class="fas fa-check"></i></td>
                    <td align="center">
                       <?
                            $link = mysqli_connect("localhost", "root", "");
                            mysqli_query($link,"set names utf8");
                            mysqli_select_db($link,"accounts");
                            $data=mysqli_query($link, "select * from score");
                            $rs=mysqli_fetch_row($data);
                            
                            $averagescore = ($rs[1]+$rs[2]+$rs[3]+$rs[4]+$rs[5]+$rs[6]+$rs[7]+$rs[8]) / 8;
                            
                            if($averagescore > 95) {
                                echo "A";
                            }elseif ($averagescore > 85){
                                echo "B";
                            }elseif ($averagescore > 75){
                                echo "C";
                            }elseif ($averagescore > 65){
                                echo "D";
                            }elseif ($averagescore > 55) {
                                echo "E";
                            }else {
                                echo "F";
                            }
                            
                        
                        ?>
                        
                    </td>
                </tr>
            </table>
        </form>
        
        
        <br>
        <div id="clock" hidden>
        <iframe src="teacher_studentsystempage.php" width="100%" height="500px" frameborder="0" scrolling="yes"></iframe>
        </div>
    </body>
</html>