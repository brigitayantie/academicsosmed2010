<? session_start();
require_once ("lib/Session.class.php");
$masterAmbilSemua =$_SESSION["masterAmbilSemua"];

$objSession = new whosOnline(session_id(),$masterAmbilSemua["id_user"]);
$row=$objSession->hapusSessionCertainUser();

session_destroy();
unset($_SESSION["masterAmbilSemua"]);
unset($_SESSION["masterAmbilTeman"]);
unset($_SESSION["masterQueryAmbilTeman"]);
unset($_SESSION["masterAmbilTeman"]);
unset($_SESSION["masterQueryAmbilTeman"]);
unset($_SESSION["username"]);
unset($_SESSION["namalain"]);

header("location:  index.php");
?>