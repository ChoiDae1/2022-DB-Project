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
      
	  $offender_id = $_POST['offender_id'];
	  $available_insert = check_offender_id($conn, $offender_id);
	  
	  if($available_insert){
	    $query = "delete from Crime where offender_id = '$offender_id';";
	  	$ret1 = mysqli_query($conn, $query);
	  	if($ret1){
	  	    $query = "delete from Offender where offender_id = '$offender_id';";
	  	    $ret2  = mysqli_query($conn, $query);
	  	    if($ret2){
	  	      mysqli_query($conn, "commit"); s_msg('삭제가 완료되었습니다.');	
	  	    }else{ mysqli_query($conn, "rollback"); s_msg("rollback");}
	  	}else{ mysqli_query($conn, "rollback"); s_msg("rollback");}
	  }
	  else{ msg('존재하지 않는 범죄자 id입니다.');}
    ?>
</div>