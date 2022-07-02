<?
include "header2.php";
include "config.php";
include "util.php";
?>

<div class="containder">
	<?
	  $conn = dbconnect($host, $dbid, $dbpass, $dbname);
	  mysqli_query( $conn, "set autocommit = 0");
      mysqli_query( $conn, "set session transaction isolation level serializable");
      mysqli_query( $conn, "start transaction");
      
	  $offender_id = $_POST['id'];
	  $column = $_POST['column'];
	  $value = $_POST['value'];
	  $available_insert = check_offender_id($conn, $offender_id);
	  
	  if($available_insert){
	  	if($column==1) $query = "update Offender set offender_address = '$value' where offender_id = '$offender_id';";
	  	else if($column==2) $query = "update Offender set offender_phone = '$value' where offender_id = '$offender_id';";
	  	else if($column==3) $query = "update Offender set prison_where = '$value' where offender_id = '$offender_id';";
	  	else if($column==4) $query = "update Offender set prison_now = '$value' where offender_id = '$offender_id';";
	  	else msg('올바르지 않은 사건 칼럼번호를 입력했습니다.');
	  	$res = mysqli_query($conn, $query);
	  	if($res){ mysqli_query($conn, "commit"); s_msg('수정이 완료되었습니다.');}
	  	else{ mysqli_query($conn, "rollback"); s_msg('rollback');}
	  }
	  else{ msg('존재하지 않는 범죄자 id입니다.');}
    ?>
</div>