<?
session_start();

if (isset($_SESSION['ID'])){
    if ($_SESSION['level'] == '1'){
    header("Location: login_admininterface.php");
} elseif ($_SESSION['level' == '2']){
    header("Location: login_teacherinterface.php");
} else{
    header("Location: login_studentinterface.php");
      }
}else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = check_ID_pass($_POST['ID'], $_POST['pass']);
        
        if ($data){
            signin_success($data);
        }else{
            show_html("<p><font color='red'>帳號密碼錯誤</font></p>");
        }
    }else{
        show_html();
    }
}

function check_ID_pass($ID, $pass){
    $link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");
    
    $sql = "SELECT * FROM users WHERE ID = $ID";
    
    if ($result = mysqli_query($link,$sql)) {
        $row = mysqli_fetch_array($result);
        if($pass === $row['pass']) {
            return $row;
        }
    }
    else false;
}

function signin_success($data){
    $_SESSION['ID'] = $data['ID'];
    
    $_SESSION['level'] = $data['level'];
}

function show_html($error=''){
    

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>登入</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/login.css">
	</head>
        <body id="LoginForm">
<div class="container">
<h1 class="form-heading">登入頁面</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>帳號登入</h2>
   <p>請輸入學生、教師帳號進行登入</p>
   </div>
    <form id="Login" action="loginpage.php" method="post">

        <div class="form-group">


            <input type="text" class="form-control" name="ID" placeholder="Student ID">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="pass" placeholder="Password">

        </div>
        <div><? echo $error; ?></div>
        <div class="forgot">
        <a href="reset.html">忘記密碼？</a>
</div>
        <button type="submit" class="btn btn-primary">登入</button>

    </form>
<p class="botto-text"></p>
    </div></div></div>
    </body>
</html>
<?
}
?>