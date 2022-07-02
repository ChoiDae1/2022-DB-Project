<? 
$user = $_GET['user'];
if($user =="normal") include ("header1.php"); 
else if($user == "special") include ("header2.php");
include "config.php";
include "util.php";
?>
<?
$conn = dbconnect($host, $dbid, $dbpass, $dbname);
mysqli_query( $conn, "set autocommit = 0");
mysqli_query( $conn, "set session transaction isolation level serializable");
mysqli_query( $conn, "start transaction");

if (array_key_exists("offender_id", $_GET)) {
    $offender_id = $_GET["offender_id"];
    if($user == "normal") $query = "select * from Offender where offender_id = '$offender_id'";
    else if($user == "special") $query = "select * from Offender natural join Prison where offender_id = '$offender_id'";
    $res1 = mysqli_query($conn, $query);
    $offender = mysqli_fetch_assoc($res1);
    if (!$offender) { msg("범죄자가 존재하지 않습니다.");}
    $query = "select count(*) as count from Crime  where offender_id = '$offender_id'";
    $res2 = mysqli_query($conn, $query);
    $count = mysqli_fetch_assoc($res2);
    mysqli_query($conn, "commit");
}
?>
    <div class="container fullwidth">

        <h3>범죄자신상정보 상세 보기</h3>

        <p>
            <label for="event_name">범죄자이름</label>
            <input readonly type="text" id="event_name" name="event_name" value="<?= $offender['offender_name'] ?>"/>
        </p>

        <p>
            <label for="event_date">범죄자ID</label>
            <input readonly type="text" id="event_date" name="event_date" value="<?= $offender['offender_id'] ?>"/>
        </p>

        <p>
            <label for="event_type">범죄자나이</label>
            <input readonly type="text" id="event_type" name="event_type" value="<?= $offender['offender_age'] ?>"/>
        </p>
        <p>
            <label for="event_place">범죄자거주지역</label>
            <input readonly type="text" id="event_place" name="event_place" value="<?= $offender['offender_address'] ?>"/>
        </p>
        <p>
            <label for="offender_name">교도소출소여부</label>
            <input readonly type="text" id="offender_name" name="offender_name" value="<?= $offender['prison_now'] ?>"/>
        </p>
        <p>
            <label for="offender_id">범행횟수</label>
            <input readonly type="text" id="offender_id" name="offender_id" value="<?= $count['count'] ?>"/>
        </p>
        <? if($user == "special"){ ?>
        <p>
            <label for="event_id">범죄자전화번호</label>
            <input readonly type="text" id="event_id" name="event_id" value="<?= $offender['offender_phone'] ?>"/>
        </p>
        <p>
            <label for="police_name">최근복역한교도소명</label>
            <input readonly type="text" id="police_name" name="police_name" value="<?= $offender['prison_name'] ?>"/>
        </p>
        <p>
            <label for="victim_name">교도소전화번호</label>
            <input readonly type="text" id="victim_name" name="victim_name" value="<?= $offender['prison_phone'] ?>"/>
        </p>
 
        <? } ?>
    </div>

<? include("footer.php") ?>