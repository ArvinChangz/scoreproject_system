<!DOCTYPE HTML>
<html>
	<head>
		<title>專題上傳項目管理</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         
		
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
    <body>
        <h1 align="center"><h15>專題評分項目管理</h15></h1>
        <hr>
        <script>
function node(name, child){
	this.name=name;
	this.child=child;
}

function dataHierarchy(){
	
	var mandarin=new Array();
	var i=0;
	mandarin[i++]=new node("文件初稿", ["系統描述", "需求規格", "設計規格"]);
	mandarin[i++]=new node("其他需求", ["檔案大小", "系統文件"]);
	
	var english=new Array();
	var i=0;
	english[i++]=new node("系統其他功能", ["功能實用性", "系統技術性", "內容豐富性"]);
	
	var output=new Array();
	var i=0;
	output[i++]=new node("系統要求", mandarin);
	output[i++]=new node("系統功能", english);

	return(output);
}

           
dataTree=dataHierarchy();

// 第三個欄位被更動後的反應動作
function onChangeColumn3(){
	updatePath();
}

// 第二個欄位被更動後的反應動作
function onChangeColumn2(){
	form=document.theForm;
	index1=form.column1.selectedIndex;
	index2=form.column2.selectedIndex;
	index3=form.column3.selectedIndex;
	// Create options for column 3
	for (i=0;i<dataTree[index1].child[index2].child.length;i++)
		form.column3.options[i]=new Option(dataTree[index1].child[index2].child[i], dataTree[index1].child[index2].child[i]);
	form.column3.options.length=dataTree[index1].child[index2].child.length;
	updatePath();
}

// 第一個欄位被更動後的反應動作
function onChangeColumn1() {
	form=document.theForm;
	index1=form.column1.selectedIndex;
	index2=form.column2.selectedIndex;
	index3=form.column3.selectedIndex;
	// Create options for column 2
	for (i=0;i<dataTree[index1].child.length;i++)
		form.column2.options[i]=new Option(dataTree[index1].child[i].name, dataTree[index1].child[i].name);
	form.column2.options.length=dataTree[index1].child.length;
	// Clear column 3
	form.column3.options.length=0;
	updatePath();
}

// 修改所顯示的路徑
function updatePath(){
	form=document.theForm;
	index1=form.column1.selectedIndex;
	index2=form.column2.selectedIndex;
	index3=form.column3.selectedIndex;
	if ((index1>=0) && (index2>=0) && (index3>=0)) {
		text1=form.column1.options[index1].text;
		text2=form.column2.options[index2].text;
		text3=form.column3.options[index3].text;
		form.path.value=text1+" ==> "+text2+" ==> "+text3;
	} else
		form.path.value="";
}
</script>
        
        <div class="center">
            <form name="theForm">
                <table align=center border=1>
	               <tr>
                       <th>分類</th><th>需求分類</th><th>功能分類</th>
                       
                    </tr>
                    <tr>
		<td align=center>
			<select name="column1" size=10 onChange="onChangeColumn1();">
				<script>
				for (i=0; i<dataTree.length; i++)
					document.writeln("<option value=\""+dataTree[i].name+"\">"+dataTree[i].name);
				</script>
			</select>
                    </td>
		<td align=center>
			<select name="column2" size=10 onChange="onChangeColumn2();">
            </select></td>
		<td align=center>
			<select name="column3" size=10 onChange="onChangeColumn3();">
            </select></td></tr>
	<tr><td colspan=3 align=center>路徑：<input type=text name=path size=60></td></tr>
                </table>
            </form>
        </div>
        <hr>
    </body>
</html> 
       
            