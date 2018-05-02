<? session_start();

require_once "../lib/Session.class.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$objSession = new whosOnline(session_id(),$masterAmbilSemua["id_user"]);
$row=$objSession->cekSessionId();

$friends=$objSession->myFriends();
$i=0;
echo "<table>";
foreach($friends as $friend)
{

echo "<tr><td><img src='thumb1.php?img=$friend[foto]&lebar=25'></td><td><a href=\"javascript:void(0)\" onClick=\"javascript:chatWith('$friend[id]','$friend[nama]','$friend[foto]')\">$friend[nama]</a></td></tr>";
  //disimpan di array
}
echo "</table>";

?>