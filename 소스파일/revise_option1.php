<? include ("header2.php") ?>

<html lang='ko'>
<head>
	<title>수정할 정보유형 선택</title>
</head> 
	
<body>
	<div align='center'>
	<form name="form" action="revise_option2.php" method="get">
		</br>
		<P>수정하고자하는 <b>정보유형</b>을 선택하세요.
		</P>
		<p>
		    <input type="radio" name="revise_type" value="option1">사건정보를 수정</br>
			<input type="radio" name="revise_type" value="option2">범죄자신상정보를 수정</br>
			</P>
		<p>
		    <input type="submit" name="formbutton1" value="선택완료">
		</p>
	</form>
	</div>


<? include ("footer.php"); ?>