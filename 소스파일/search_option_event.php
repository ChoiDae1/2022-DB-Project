<? 
$user = $_GET['user'];
if($user == "normal") include ("header1.php"); 
else if($user == "special") include ("header2.php") ?>

<html lang='ko'>
<head>
	<title>사건정보 조회옵션 선택</title>
</head> 
	
<body>
	<div align='center'>
	<form name="form" action="search_input_event.php" method="get">
		</br>
		<P>사건정보 <b>조회옵션</b>을 선택하세요.
		</P>
		<p>
		    <input type="radio" name="search_option_event" value="option1">사건이름을 통해 조회</br>
			<input type="radio" name="search_option_event" value="option2">범죄자이름을 통해 조회</br>
			<input type="radio" name="search_option_event" value="option3">사건발생장소을 통해 조회</br>	
			<input type="hidden" name="user" value="<?=$user?>">
		</P>
		<p>
		    <input type="submit" name="formbutton1" value="선택완료">
		</p>
	</form>
	</div>


<? include ("footer.php"); ?>