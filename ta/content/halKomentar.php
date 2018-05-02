<script language="javascript" src="../script/ajax.js"></script>
<script type="text/javascript" src="../script/tampilShoutOutWall.js"></script>

<?

$idK = $_GET["idK"];
echo "<textarea id='komentar_$idK'></textarea>";
?>
<br /><div  align="right" style="width:100%;">
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:tambahKS(<? echo  "$idK"; ?>);">Shout It</a>
                                            		</span>
                                            	</div>
                    
