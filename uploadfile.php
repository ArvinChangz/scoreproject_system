<?php

$link = mysqli_connect("localhost", "root", "");
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,"accounts");


    $file=mysqli_query($link, "select * from uploadfile");
    

$fileCount = count($_FILES['my_file']['name']);

for ($i = 0; $i < $fileCount; $i++) {
  
  if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK){
    echo '檔案名稱: ' . $_FILES['my_file']['name'][$i] . '<br/>';
    echo '檔案類型: ' . $_FILES['my_file']['type'][$i] . '<br/>';
    echo '檔案大小: ' . ($_FILES['my_file']['size'][$i] / 1024) . ' KB<br/>';
    echo '暫存名稱: ' . $_FILES['my_file']['tmp_name'][$i] . '<br/>';

    
    if (file_exists('upload/' . $_FILES['my_file']['name'][$i])){
      echo '檔案已存在。<br/>';
    } else {
      $file = $_FILES['my_file']['tmp_name'][$i];
      $dest = 'upload/' . $_FILES['my_file']['name'][$i];

      
      move_uploaded_file($file, $dest);
    }
  } else {
    echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br/>';
  }
}
?>