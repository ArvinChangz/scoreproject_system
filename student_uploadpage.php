<!DOCTYPE HTML>
<html>
	<head>
		<title>專題上傳系統</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
    <body>
        <h1 align="center"><h15>專題上傳系統</h15></h1>
        <br>
        <form action="uploadfile.php" method="post">
            <table border=4 align=center width=100% bgcolor=white>
                <tr>
                    <td width="50%" align="center">系統名稱</td>
                    <td width="50%" align="center">屢屢率</td>
                </tr>
                <tr>
                    <td width="50%" align="center">小組名單</td>
                    <td width="50%" align="center">xxx xxx xxx xxx</td>
                </tr>
                <tr>
                    <td width="50%" align="center" rowspan="6">文件初稿</td>
                     <td width="50%" align="center">系統描述(限PDF)</td>
                </tr>
                
                <tr>
                    <td width="50%" align="center">
                    
                        <input type="file" accept=".pdf" />
                    </td>  
                </tr>
                <tr>
                    <td width="50%" align="center">需求規格(限PDF)</td>
                </tr>
                <tr>
                    <td width="50%" align="center">
                        <input type="file" accept=".pdf" />
                        </td>
                </tr>
                <tr>
                    <td width="50%" align="center">設計規格(限PDF)</td>
                </tr>
                <tr>
                    <td width="50%" align="center">
                        <input type="file" accept=".pdf" />
                        </td>
                </tr>
                <tr>
                     <td width="50%" align="center" rowspan="2">作品上傳</td>
                    <td width="50%" align="center">系統文件上傳</td>
                </tr>
                <tr>
                    
                    <td width="50%" align="center">
                        <input type="file" name="file" />
                        </td>
                </tr>
                <tr>
                    <td width="50%" align="center" rowspan="1">其他說明（備註）</td>
                
                    <td width="50%" align="center"><input type="text" height="100px"></td>
                </tr>
                <tr>
                    <td width="50%" align="right"><input type="submit" value="送出" >
                    </td>
                    <td width="50%" align="left"><input type="reset" value="清除"></td>
                </tr>
            </table>
        </form>
    </body>
</html>