<? include "header2.php";
if($_GET['revise_type']=='option1') $action = "revise_event.php";
else if($_GET['revise_type']=='option2') $action = "revise_offender.php";
?>

<html lang='ko'>
<head>
	<title>수정하고자하는 id, 칼럼, 정보 입력</title>
</head> 
	
<body>
	<div align='center'>
	<form name="form" action="<?=$action?>" method="POST">
		</br>
		<?if($_GET['revise_type']=='option1'){
		echo "<P>수정대상인 <b>사건의 ID</b>를 입력하세요</P>";}
		else echo "<P>수정대상인 <b>범죄자의 ID</b>를 입력하세요</P>"?>
		<p>
		    ID: <input type="text" name="id">
		</p>
		</br>
	    <?if($_GET['revise_type']=='option1'){
		echo "<P>수정하고자 하는 <b>칼럼번호</b>을 입력하세요<b>(1(사건이름), 2(사건발생장소), 3(범죄유형) 중 하나 입력)</b></P>";}
		else echo "<P>수정하고자 하는 <b>칼럼번호</b>을 입력하세요<b>(1(거주지역), 2(휴대폰번호), 3(최근 복역한 교도소id), 4(교도소 출소여부) 중 하나 입력)</b></P>"?>
		<p>    
		    Column: <input type="text" name="column">
		</p>
		</br>
		<p>수정하고자 하는 <b>값</b>을 입력하세요</p>
		<p>
			Value: <input type="text" name="value">
		</p>
		</br>
		<input type="submit" name="formbutton1" value="수정">
		
	</form>
	</div>


<? include ("footer.php"); ?>




