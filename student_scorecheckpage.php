<!DOCTYPE HTML>
<html>
	<head>
		<title>學生審查結果</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
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
        <h1 align="center"><h15>專題評分結果</h15></h1>
        <br>
        <br>
        <form action="xxx.php" method="get">
            <table border="1">
                <tr>
                    <td width="20%" align="center">上傳時間</td>
                    <td width="20%" align="center">教師確認時間</td>
                    <td width="20%" align="center">系統名稱</td>
                    <td width="20%" align="center">評分結果及說明</td>
                    <td width="20%" align="center">是否需要補交</td>
                </tr>
                <tr>
                     <td width="20%" align="center">2018.11.11 &nbsp;&nbsp; 19:26:32
                </td>
                     <td width="20%" align="center">2018.11.16 &nbsp;&nbsp; 10.31.26</td>
                     <td width="20%" align="center">自動作弊神器</td>
                    <td width="20%" align="center"><input type="button" value="點此查看" onclick="toggleClock()" id="clockButton"></td>
                    <td width="20%" align="center"><i class="fa fa-check-circle" style="font-size:48px;color:red"></i></td>
                </tr>    
            </table>
        </form>
        <br>
        <br>
        <br>
        <br>
        <div id="clock" hidden>
        <iframe src="student_checkscorepage.php" width="100%" height="500px" frameborder="0" scrolling="yes"></iframe>
        </div>
    </body>
</html>