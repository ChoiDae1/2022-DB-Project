<? include ("header2.php") ?>

<html lang='ko'>
<head>
	<title>삭제하고자 하는 범죄자 id 입력</title>
</head> 
	
<body>
	<div align='center'>
	<form name="form" action="delete.php" method="POST">
		</br>
		<P>삭제하고자 하는 <b>범죄자 ID</b>를 입력하세요
		</P>
		<p>
		    범죄자 ID: <input type="text" name="offender_id">
		<p>
		    <input type="submit" name="formbutton1" value="삭제">
		</p>
		</br>
		<b>  ** 범죄자 신상정보와 달리 사건정보는 삭제할 수 없습니다. **</b></b>
	</form>
	</div>


<? include ("footer.php"); ?>