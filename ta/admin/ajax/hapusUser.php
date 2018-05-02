<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();





$id_user = $_POST["idUser"];
$tipey = $_POST["tipeForm"];

if($tipey=="1")
{
$query="DELETE  FROM matkul where id_matkul=$id_user";
mysql_query($query);

}
else
mysql_query("DELETE  FROM user where id_user=$id_user");



?>
