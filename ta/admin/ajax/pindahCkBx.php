<? session_start();

$idJ=$_SESSION["idJ"];
//echo $idJ;
include "../../lib/sambungDatabase.php";
 require "../../lib/Pager.class.php";?>

<form name="orderform2">

     <table align="center" border="1" id="tabel2">
                                           <?
										   $page=$_POST["page"];
										         $query=mysql_query("SELECT user.id_user,user.nama FROM mhs INNER JOIN user ON user.id_user=mhs.id_mhs WHERE mhs.id_jurusan=$idJ");
										   
										   $baris = 2;


$limit=2;
//$hasilQuery = mysql_query($query);
$jumRow = mysql_num_rows($query);
$objPage=New Pager($limit,$jumRow,$page);
$start = $objPage->findStart($page);
   $query=mysql_query("SELECT user.id_user,user.nama FROM mhs INNER JOIN user ON user.id_user=mhs.id_mhs WHERE mhs.id_jurusan='$idJ' LIMIT $start,$limit");

										   $jumRow=mysql_num_rows($query);
										   for($i=0;$i<$jumRow;$i++)
										   {echo "<tr>";
											   $fetchArray = mysql_fetch_array($query);
												echo "<td><input onclick=\"javascript:insRow('$fetchArray[id_user]','$fetchArray[nama]')\" type=\"checkbox\" name=\"music\" value=\"$fetchArray[id_user]\"></td><td>$fetchArray[id_user]</td><td>$fetchArray[nama]</td>";
												echo"</tr>";
										   }
										   
										   ?>
                                           </td></tr>
                                           </table>
                                           <? echo $objPage->pageList($page); ?>
                                          </form>      
                