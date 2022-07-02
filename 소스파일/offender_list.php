<? 
$user = $_GET['user'];
if($user =="normal") include ("header1.php"); 
else if($user == "special") include ("header2.php");
include "config.php";
include "util.php";
?>

<?
  $conn = dbconnect($host, $dbid, $dbpass, $dbname);
  $query = "select * from Offender order by offender_name;";
  $result = mysqli_query($conn, $query);
?>

<div class="container">
<table class="table table-striped table-bordered">
    <thead>
	    <tr>
	        <th>No.</th>
	        <th>범죄자이름</th>
	        <th>범죄자ID</th>
	        <th>범죄자거주지역</th>
	        </tr>
	        </thead>
	        <tbody>
	        <?$row_index = 1;
	        while ($row = mysqli_fetch_array($result)) {
	            echo "<tr>";
	            echo "<td>{$row_index}</td>";
	            echo "<td><a href='offender_detail.php?offender_id={$row['offender_id']}&user=$user'>{$row['offender_name']}</a></td>";
	            echo "<td>{$row['offender_id']}</td>";
	            echo "<td>{$row['offender_address']}</td>";
	            echo "</tr>";
	            $row_index++;
	        }
	        ?>
	        </tbody>
</table>
</div>
<? include ("footer.php"); ?>