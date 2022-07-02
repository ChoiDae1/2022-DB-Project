<? include "header2.php";
?>

<html lang='ko'>
<head>
	<title>수정하고자하는 id, 칼럼, 정보 입력</title>
</head> 
	
<body>
	<div align='center'>
	</br>
	<p> <b>** 현재 사이트는 새로운 사건이 발생했을때, 이에 대한 관련정보를 추가하는 페이지 입니다. ** </b></p>
	<form name="form" action="add.php" method="POST">
		<P>추가할 <b>피해자정보</b>를 입력하세요</p>
		<p>
		    피해자 ID: <input type="text" name="victim_v1"> </br>
		    피해자 이름: <input type="text" name="victim_v2"> </br>
		    피해자 거주지역: <input type="text" name="victim_v3"> </br>
		    피해자 전화번호: <input type="text" name="victim_v4"> </br>
		</p>
		</br>
        <P>추가할 <b>사건정보</b>를 입력하세요</p>
		<p>	
		    사건 ID: <input type="text" name="event_v1"> </br>
		    사건 이름: <input type="text" name="event_v2"> </br>
		    사건 발생일시: <input type="text" name="event_v3"> </br>
		    사건 발생장소: <input type="text" name="event_v4"> </br>
		    범죄 유형: <input type="text" name="event_v5"> </br>
		    담당 경찰서 ID(1~5 중 하나여야 함): <input type="text" name="event_v6"> </br>
		</p>
		</br>
		<P>추가할 <b>범죄자신상정보</b>를 입력하세요</p>
		<p>	
		    범죄자 ID: <input type="text" name="offender_v1"> </br>
		    범죄자 이름: <input type="text" name="offender_v2"> </br>
		    범죄자 거주지역: <input type="text" name="offender_v3"> </br>
		    범죄자 나이: <input type="text" name="offender_v4"> </br>
		    범죄자 전화번호: <input type="text" name="offender_v5"> </br>
		    최근 거주 교도소 id(1~5 중 하나여야 함): <input type="text" name="offender_v6"> </br>
		</p>
		</br>
	    <P>사건에 대한 <b>법원의 판결정보</b>를 입력하세요</p>
		<p>	
		    판결: <input type="text" name="judge"> </br>

		</p>
		</br>
		<input type="submit" name="formbutton1" value="추가">
		
	</form>
	</div>


<? include ("footer.php"); ?>