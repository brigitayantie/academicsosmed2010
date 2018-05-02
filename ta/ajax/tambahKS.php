<? session_start();
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$shoutOut = $_POST["shoutOut"];
$idShoutOut = $_POST["idShoutOut"];
$sql = mysql_query("INSERT INTO tgsakhir.komentarshoutout (timestamp,id_user,id_shoutout,isi) VALUES (CURRENT_TIMESTAMP,'$masterAmbilSemua[id_user]','$idShoutOut','$shoutOut')");

$rowBaru = mysql_insert_id();
/*
$objUser = new Profile("$masterAmbilSemua[id_user]"); 

$status=$objUser->GetStatus();
echo $status[isishoutout]; 
echo    "<span id='waktushoutout'></span>";
echo "<input type='hidden' id='startwaktushoutout' value='$status[timestamp]' />";
*/
/*
if($sql)
{
	echo "<tr><td><a href='profile.php?id=$masterAmbilSemua[id_user]'>$masterAmbilSemua[Nama]</a>&nbsp;&nbsp;&nbsp;$shoutOut&nbsp;&nbsp;&nbsp;";
		echo "<a href='javascript:hapusKomentar($rowBaru);'>x</a>";
		echo"</td></tr>";
}
*/
if($sql)
{
                                            	
                                            	echo "<div class='comment-feed' id='k_$rowBaru'>"; ?>
                                                	<a href="#"  class="comment-pic">
                                                    <? if($fetchArray[foto]=="") $fetchArray[foto]="thumb1.php?img=images/01.png&lebar=50"; ?>
                                	<img src=<? echo "thumb1.php?img=$masterAmbilSemua[foto]&lebar=50"; ?> />
                                                    </a>
                                                    <div class="post">
                                                    	<div class="comment-text">
                                                        	<a href="#"><? echo "$masterAmbilSemua[Nama]"; ?> </a>
                                                            <? echo "$shoutOut"; 
		echo "<a href='javascript:hapusKomentar2($rowBaru);'>&nbsp;&nbsp;x</a>";?>
                                                        </div>
                                                    </div>
                                                </div>
                                             <?  
} 
//include "isiShoutout.php";
?>