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

if (array_key_exists("event_id", $_GET)) {
    $event_id = $_GET["event_id"];
    if($user == "normal") $query = "select * from Offender natural join Crime natural join Events where event_id = '$event_id'";
    else if($user == "special") $query = "select * from Offender natural join Crime natural join Events natural join Victim natural join Prison natural join Police where event_id = '$event_id'";
    $res = mysqli_query($conn, $query);
    $event = mysqli_fetch_assoc($res);
    if (!$event) { msg("사건이 존재하지 않습니다.");}
    mysqli_query($conn, "commit");
}
?>
    <div class="container fullwidth">

        <h3>사건 정보 상세 보기</h3>

        <p>
            <label for="event_name">사건이름</label>
            <input readonly type="text" id="event_name" name="event_name" value="<?= $event['event_name'] ?>"/>
        </p>

        <p>
            <label for="event_date">사건발생일시</label>
            <input readonly type="text" id="event_date" name="event_date" value="<?= $event['event_date'] ?>"/>
        </p>

        <p>
            <label for="event_type">범죄유형</label>
            <input readonly type="text" id="event_type" name="event_type" value="<?= $event['event_type'] ?>"/>
        </p>
        <p>
            <label for="event_place">사건발생지역</label>
            <input readonly type="text" id="event_place" name="event_place" value="<?= $event['event_place'] ?>"/>
        </p>
        <p>
            <label for="offender_name">범죄자이름</label>
            <input readonly type="text" id="offender_name" name="offender_name" value="<?= $event['offender_name'] ?>"/>
        </p>
        <p>
            <label for="offender_id">범죄자ID</label>
            <input readonly type="text" id="offender_id" name="offender_id" value="<?= $event['offender_id'] ?>"/>
        </p>
        <p>
            <label for="judge">선고</label>
            <input readonly type="text" id="judge" name="judge" value="<?= $event['judge'] ?>"/>
        </p>
        <p>
            <label for="prison_now">교도소 출소 여부</label>
            <input readonly type="text" id="prison_now" name="prison_now" value="<?= $event['prison_now'] ?>"/>
        </p>
        <? if($user == "special"){ ?>
        <p>
            <label for="event_id">사건ID</label>
            <input readonly type="text" id="event_id" name="event_id" value="<?= $event['event_id'] ?>"/>
        </p>
        <p>
            <label for="police_name">사건담당경찰서</label>
            <input readonly type="text" id="police_name" name="police_name" value="<?= $event['police_name'] ?>"/>
        </p>
        <p>
            <label for="victim_name">피해자이름</label>
            <input readonly type="text" id="victim_name" name="victim_name" value="<?= $event['victim_name'] ?>"/>
        </p>
        <p>
            <label for="victim_address">피해자거주지역</label>
            <input readonly type="text" id="victim_address" name="victim_address" value="<?= $event['victim_address'] ?>"/>
        </p>
        <p>
            <label for="victim_phonenum">피해자전화번호</label>
            <input readonly type="text" id="victim_phonenum" name="victim_phonenum" value="<?= $event['victim_phonenum'] ?>"/>
        </p>
        <? } ?>
    </div>

<? include("footer.php") ?>
