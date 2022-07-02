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
      
	  $event_id = $_POST['id'];
	  $column = $_POST['column'];
	  $value = $_POST['value'];
	  $available_insert = check_event_id($conn, $event_id);
	  
	  if($available_insert){
	  	if($column==1) $query = "update Events set event_name = '$value' where event_id = '$event_id';";
	  	else if($column==2) $query = "update Events set event_place = '$value' where event_id = '$event_id';";
	  	else if($column==3) $query = "update Events set event_type = '$value' where event_id = '$event_id';";
	  	$res = mysqli_query($conn, $query);
	  	if($res){ mysqli_query($conn, "commit"); s_msg('수정이 완료되었습니다.');}
	  	else{ mysqli_query($conn, "rollback"); s_msg('rollback');}
	  }
	  else{ msg('존재하지 않는 사건 id입니다.');}
    ?>
</div>