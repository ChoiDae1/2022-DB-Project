<? 
$user = $_GET['user'];
if($user == "normal") include ("header1.php"); 
else if($user == "special") include ("header2.php") ?>

<html lang='ko'>
<head>
	<title>범죄자신상정보 조회옵션 선택</title>
</head> 
	
<body>
	<div align='center'>
	<form name="form" action="search_input_offender.php" method="get">
		</br>
		<P>범죄자신상정보 <b>조회옵션</b>을 선택하세요.
		</P>
		<p>
		    <input type="radio" name="search_option_offender" value="option1">범죄자 ID을 통해 조회</br>
			<input type="radio" name="search_option_offender" value="option2">범죄자 거주지역을 통해 조회</br>
			<input type="hidden" name="user" value="<?=$user?>">
			</P>
		<p>
		    <input type="submit" name="formbutton1" value="선택완료">
		</p>
	</form>
	</div>


<? include ("footer.php"); ?>