<? session_start();
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$shoutOut = $_POST["shoutOut"];
if($_POST[untuk]=="")
{
$sql = mysql_query("INSERT INTO tgsakhir.shoutout (timestamp,id_user,id_jenisshoutout,isishoutout) VALUES (CURRENT_TIMESTAMP,'$masterAmbilSemua[id_user]','1','$shoutOut')");
$rowBaru = mysql_insert_id();
$sql2 = mysql_query("UPDATE tgsakhir.user SET id_shoutout=$rowBaru WHERE id_user='$masterAmbilSemua[id_user]'");
}
else
{
$sql = mysql_query("INSERT INTO tgsakhir.shoutout (timestamp,id_user,id_jenisshoutout,isishoutout) VALUES (CURRENT_TIMESTAMP,'$_POST[untuk]','2','$shoutOut')");
$rowBaru = mysql_insert_id();
$sql2 = mysql_query("UPDATE tgsakhir.user SET id_shoutout=$rowBaru WHERE id_user='$masterAmbilSemua[id_user]'");
$sql3 = mysql_query("INSERT INTO tgsakhir.pengirimwall (id_pengirim,id_shoutout) VALUES ('$masterAmbilSemua[id_user]','$rowBaru')");

}
$objUser = new Profile("$masterAmbilSemua[id_user]"); 
$status=$objUser->GetStatus();
//echo $status[isishoutout]; 
echo    "<span id='waktushoutout'></span>";

echo "<input type='hidden' id='startwaktushoutout' value='$status[timestamp]' />";
/*
echo "<table id='shout_$rowBaru' width='100%' >";
	echo "<tr><td align='center' width='50px'>";
	//echo "-".file_exists('../images/01xx.png');
	//$file='$fetchArray[foto]';
	//if(file_exists($file)) {	echo "<img src='$fetchArray[foto]' />"; }
	//else 	{ echo "<img src='images/02.png' />"; }
	echo "<img src='$fetchArray[foto]' />";
	echo "</td>";
	echo "<td>";
	echo "<a href='profile.php?id=$masterAmbilSemua[id_user]'>$masterAmbilSemua[Nama]</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "$shoutOut&nbsp;&nbsp;&nbsp;<a href='javascript:hapusKomentar($rowBaru);'>x</a><br /><br />";
	

	echo "<table bgcolor='#6699FF' >";
	echo "<tr><td><a href='javascript:halKomentar($fetchArray[id_shoutout]);'>Komentar</a></td></tr>";
	echo "</table>";
	echo "</td></tr>";
		echo "</table>";	
*/

echo "<li id=shout_$rowBaru>"; ?>
                        	<div>
                            	<a href="#" class="post-pic">
                                	<? if($masterAmbilSemua[foto]=="") $masterAmbilSemua[foto]="thumb1.php?img=images/01.png&lebar=50"; ?>
                                	<img src=<? echo "thumb1.php?img=$masterAmbilSemua[foto]&lebar=50"; ?> />
                                   
                                </a>
                                <div class="post" >
                                	<h6>
                                    	<a href="#"><? echo "$masterAmbilSemua[Nama]"; ?></a>
                                         <? echo "$shoutOut"; //if($fetchArray[id_user]==$masterAmbilSemua[id_user]);
	echo "<a href='javascript:hapusKomentar($rowBaru);'>&nbsp;&nbsp;x</a>";?>
                                    </h6>
                                    
                                    
                                    <div>
                                    	<? echo "<div class='comment-box'>"; ?>
                                        	<? echo "<div id='kom_$rowBaru'>"; ?>
                                                                                            
                                            </div>
                                            <div class="comment-actions">
                                            	<div class="comment-feed">
                                                	<label class="comment-add-button">
                                                    	<span class="art-button-wrapper"> 
                                                            <span class="l"> </span> 
                                                            <span class="r"> </span> 
                                                            <a class="art-button" href='javascript:halKomentar(<? echo "$rowBaru"; ?>)'>Beri Komentar</a> 
                                                        </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
