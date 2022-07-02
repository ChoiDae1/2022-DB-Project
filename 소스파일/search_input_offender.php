<? 
$user = $_GET['user'];
$search_option = $_GET['search_option_offender'];
if($user == "normal") include ("header1.php"); 
else if($user == "special") include ("header2.php");
?>



<html lang='ko'>
<head>
	<title>조회를 위해 필요한 정보 입력</title>
</head> 

<body>
	<div align='center'>
	<form name="form" action="search_offender.php" method="POST">
		</br>
		<?if($search_option=='option1'){
		echo "<P> <b>범죄자 ID</b>를 입력하세요</P>";}
		else if($search_option=='option2'){
		echo "<P> <b>범죄자 거주지역</b>을 입력하세요</P>";	
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