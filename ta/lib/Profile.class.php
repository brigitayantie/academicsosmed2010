<?
require_once ("config.inc.php");
require_once ("Database.class.php");

class Profile
{
	var $db;
	var $user;
	
	function Profile($user)
	{
		//u/ akses var$db harus pakai this->
		$this->db = new Database (DB_SERVER, DB_USER,DB_PASS,DB_DATABASE);
		$this->db->connect();
		
		$this->user=$user;
	}
	
	function GetStatus()
	{
		/*
		$query = "select i.isi, s.timestamp 
		from shoutout s inner join isishoutout i on s.id_shoutout=i.id_shoutout 
		inner join user u on s.id_shoutout=u.id_shoutout 
		where s.id_user='$this->user' and s.id_jenisshoutout='1'";
		// on -> penghubung tabel1 dan tabel2 
		*/
		
		$query="SELECT s.isishoutout,s.timestamp FROM tgsakhir.shoutout s 
		INNER JOIN tgsakhir.user u ON s.id_shoutout=u.id_shoutout
		WHERE s.id_user = '$this->user' and s.id_jenisshoutout='1'";
		
		$row = $this->db->query_first($query);
		
		return $row;
		
		//return $query;
		
	}
	
	
	
	
	
}
?>