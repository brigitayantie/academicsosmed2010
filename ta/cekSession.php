<? session_start();

//echo session_is_registered("masterAmbilSemua")."<br>";
if(!session_is_registered("masterAmbilSemua"))
header("location:  index.php");
require_once "lib/Session.class.php";
require_once ("lib/config.inc.php");
require_once ("lib/Database.class.php");
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$objSession = new whosOnline(session_id(),$masterAmbilSemua[id_user]);
$row=$objSession->cekSessionId();

$friends=$objSession->myFriends();
$i=0;
foreach($friends as $friend)
{
$teman[$i] = $friend[Nama];
//echo $friend[Nama]."<br>";
//$i++;
  //disimpan di array
}


if(count($row)==0)
header("location:  logout.php");

?>