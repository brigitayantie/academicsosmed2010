<? require_once ("sambungDatabase.php");

$queryNama=mysql_query("SELECT nama FROM user");
$i=0;
while($row=mysql_fetch_array($queryNama))
{	
	$nama[$i] = $row[0];
	$i++;
}

$comma_separated = implode("\",\"", $nama);


echo "[\"$comma_separated\"]";

/*
["Sylvia Molloy", "Manuel Mujica Lainez", "Gustavo Nielsen", "Silvina Ocampo", "Victoria Ocampo", "Hector German Oesterheld", "Olga Orozco", "Juan L. Ortiz", "Alicia Partnoy", "Roberto Payro", "Ricardo Piglia", "Felipe Pigna", "Alejandra Pizarnik", "Antonio Porchia", "Juan Carlos Portantiero", "Manuel Puig", "Andres Rivera", "Mario Rodriguez Cobos", "Arturo Andres Roig", "Ricardo Rojas"]
*/
?>
