<? 
$user = $_GET['user'];
$search_option = $_GET['search_option_event'];
if($user == "normal") include ("header1.php"); 
else if($user == "special") include ("header2.php");
?>



<html lang='ko'>
<head>
	<title>조회를 위해 필요한 정보 입력</title>
</head> 

<body>
	<div align='center'>
	<form name="form" action="search_event.php" method="POST">
		</br>
		<?if($search_option=='option1'){
		echo "<P> <b>사건의 이름</b>를 입력하세요</P>";}
		else if($search_option=='option2'){
		echo "<P> <b>범죄자 이름</b>를 입력하세요</P>";	
		}
		else if($search_option=='option3'){
		echo "<P> <b>사건발생장소</b>를 입력하세요</P>";	
		}?>
		<p>
		    <input type="text" name="search_data">
		    <input type="hidden" name="user" value="<?=$user?>">
		    <input type="hidden" name='search_option' value="<?=$search_option?>">
		</p>
		<input type="submit" name="formbutton1" value="조회">
		
	</form>
	</div>


<? include ("footer.php"); ?>