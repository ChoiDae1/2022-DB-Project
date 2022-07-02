<? 
$user = $_GET['user'];
if($user =="normal") include ("header1.php"); 
else if($user == "special") include ("header2.php");
include "config.php";
include "util.php";
?>

<?
  $conn = dbconnect($host, $dbid, $dbpass, $dbname);
  $query = "select * from Events natural join Crime natural join Offender order by event_date desc";
  $res = mysqli_query($conn, $query);
?>

<div class="container">
<table class="table table-striped table-bordered">
    <thead>
	    <tr>
	        <th>No.</th>
	        <th>사건이름</th>
	        <th>범죄자이름</th>
	        <th>사건발생장소</th>
	        <th>사건발생시간</th>
	        </tr>
	        </thead>
	        <tbody>
	        <?$row_index = 1;
	        while ($row = mysqli_fetch_array($res)) {
	            echo "<tr>";
	            echo "<td>{$row_index}</td>";
	            echo "<td><a href='event_detail.php?event_id={$row['event_id']}&user=$user'>{$row['event_name']}</a></td>";
	            echo "<td>{$row['offender_name']}</td>";
	            echo "<td>{$row['event_place']}</td>";
	            echo "<td>{$row['event_date']}</td>";
	            echo "</tr>";
	            $row_index++;
	        }
	        ?>
	        </tbody>
</table>
</div>
<? include ("footer.php"); ?>