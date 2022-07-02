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
      
      $victim_v1 = $_POST['victim_v1'];
      $victim_v2 = $_POST['victim_v2'];
      $victim_v3 = $_POST['victim_v3'];
      $victim_v4 = $_POST['victim_v4'];
      $event_v1 = $_POST['event_v1'];
      $event_v2 = $_POST['event_v2'];
      $event_v3 = $_POST['event_v3'];
      $event_v4 = $_POST['event_v4'];
      $event_v5 = $_POST['event_v5'];
      $event_v6 = $_POST['event_v6'];
      $offender_v1 = $_POST['offender_v1'];
      $offender_v2 = $_POST['offender_v2'];
      $offender_v3 = $_POST['offender_v3'];
      $offender_v4 = $_POST['offender_v4'];
      $offender_v5 = $_POST['offender_v5'];
      $offender_v6 = $_POST['offender_v6'];
      $judge = $_POST['judge'];
      
      $query = "insert into Victim values('$victim_v1','$victim_v2', '$victim_v3', '$victim_v4');";
	  $ret1 = mysqli_query($conn, $query);
	  if($ret1){
	        $query = "insert into Events values('$event_v1','$event_v2', '$event_v3', '$event_v4', '$event_v5', '$event_v6', '$victim_v1');";
	        $ret2 = mysqli_query($conn, $query);
	        if($ret2){
	            $query = "insert into Offender values('$offender_v1', '$offender_v2', '$offender_v3', '$offender_v4','$offender_v5', '$offender_v6', 'NO');";
	            $ret3 = mysqli_query($conn, $query);
	            if($ret3){
	                $query = "insert into Crime values('$event_v1', '$offender_v1', '$judge');";
	                $ret4 = mysqli_query($conn, $query);
	                if($ret4){
	                    mysqli_query($conn, "commit"); s_msg('입력이 완료되었습니다.');
	                }else{ mysqli_query($conn, "rollback"); s_msg("rollback");}
	            }else{ mysqli_query($conn, "rollback"); s_msg("rollback");}
	         }else{ mysqli_query($conn, "rollback"); s_msg("rollback");}
	     }else{ mysqli_query($conn, "rollback"); s_msg("rollback");}

    ?>
</div>