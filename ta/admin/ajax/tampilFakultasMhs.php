<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
?>
<input type="hidden" id="editMhs" value="1" />
   <select onchange="javascript:ubahCmbJurusan();" name="fakultas" id="fakultas">
<?
												$query = "SELECT * FROM fakultas order by id_fakultas";
												$rows = $db->fetch_all_array($query);
												/*$rows itu aray $rows[0]...
												for($i=0;$i<count($rows);$i++)
												$record=$row[i][nama_fakultas];
												*/
												foreach($rows as $record)
												{
													echo "<option value='$record[id_fakultas]'>$record[nama_fakultas]</option>";
												}
?>
                                                </select>


