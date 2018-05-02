<? 
require_once ("config.inc.php");
require_once ("Database.class.php");
require_once ("datediff.php");
require_once ("sambungDatabase.php");
class whosOnline extends Tanggal
{
	var $ses_id;
	var $user_id;
	var $last_time;
	var $db;
	
	function whosOnline($ses_id,$user_id)
	{
		$this->ses_id = $ses_id;
		$this->user_id = $user_id;
        $this->db = new Database (DB_SERVER, DB_USER,DB_PASS,DB_DATABASE);
		$this->db->connect();
			
	}
	function tambahSession()
	{	
		$queryCek = "SELECT * FROM tgsakhir.online ol WHERE ol.id_user='$this->user_id'";
		$row = $this->db->query_first($queryCek);
            
		if($this->db->affected_rows==0) 
		{
			$data["session_id"] = $this->ses_id;
			$data["id_user"] = $this->user_id;
            $data["last_time"] = date("Y-m-d H:i:s");
			$this->db->query_insert("online",$data);
       	}
		else
		{
			$data["session_id"] = $this->ses_id;
			$data["last_time"] = date("Y-m-d H:i:s");
			$this->db->query_update("online",$data,"id_user=$this->user_id");
		}
	}
	
	function cekSessionId()
	{
		$queryCek = "SELECT * FROM tgsakhir.online  ol WHERE ol.id_user='$this->user_id'";
		$row = $this->db->query_first($queryCek);
        //echo $this->db->affected_rows;
        /*
		echo $row[last_time]."<br />";
		echo  date("Y-m-d H:i:s");
        echo "=";
		echo parent::datediff("n", $row[last_time], date("Y-m-d H:i:s"));
        */
        $datediff = parent::datediff("n", $row[last_time], date("Y-m-d H:i:s"));
        //$datediffBenar = $datediff-60;
        //echo "->$datediffBenar";
		if($this->db->affected_rows>0)
		{
            
			if($datediff > 10) // kalo timeout 10 mnt
			{	
                unset($row);
				$row=array();
                
			}
			else if($row["session_id"]!=$this->ses_id) //kalau ses id beda
			{

				unset($row);
				$row=array();
			}
			else //diupdate last time
			{

			    $this->tambahSession();
			}
			
				
		}
        else
        {

				unset($row);
				$row=array();
		}
        
		
		return $row;
		
	}
	
	function hapusSessionTimeOut() //delete smua session yg timeoutnya lbh 10 mnt
	{
			$limittime = parent::dateadd("n",-10, date("Y-m-d H:i:s")); //mencari jam 10 menit yg lalu
			$query="delete  FROM tgsakhir.online  WHERE last_time < '$limittime'";
			$this->db->query($query);
	}
	
	function hapusSessionCertainUser() //delete smua session yg timeoutnya lbh 10 mnt
	{
			$query="delete  FROM tgsakhir.online WHERE id_user = '$this->user_id'";
            
			$this->db->query($query);
	}
	
	function myFriends()
	{
		$this->hapusSessionTimeOut();
		
		$limittime = parent::dateadd("n",-10, date("Y-m-d H:i:s"));
		/*
		$query="SELECT DISTINCT f.id,f.nama FROM (SELECT t.id_subyek as id,u.nama 
		FROM tgsakhir.teman t INNER JOIN tgsakhir.online o ON t.id_subyek = o.id_user 
		INNER JOIN tgsakhir.user u ON u.id_user = o.id_user WHERE t.status='terima' AND o.last_time>'$limittime' AND t.id_obyek=$this->user_id 
UNION
SELECT t.id_obyek as id,u.nama 
FROM tgsakhir.teman t INNER JOIN tgsakhir.online o
ON t.id_obyek=o.id_user
INNER JOIN user u ON u.id_user = o.id_user
WHERE t.status='terima' AND o.last_time>'$limittime' 
AND t.id_subyek = $this->user_id) f"; //kalau field pakai as klo tabel ga
		echo $query;
		*/
		
	//kalau field pakai as klo tabel ga
    /* tanpa foto
		$query="SELECT DISTINCT f.id, f.nama
FROM (

SELECT t.id_subyek AS id, mhs.Nama AS nama FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_subyek = o.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = o.id_user
WHERE t.status = 'terima'
AND t.id_obyek =$this->user_id
AND o.last_time>'$limittime' 
UNION SELECT t.id_obyek AS id, mhs.Nama AS nama
FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_obyek = o.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = o.id_user
WHERE t.status = 'terima'
AND t.id_subyek = $this->user_id
AND o.last_time>'$limittime' 
UNION SELECT t.id_obyek AS id, dsn.Nama AS nama
FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_obyek = o.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = o.id_user
WHERE t.status = 'terima'
AND t.id_subyek = $this->user_id
AND o.last_time>'$limittime' 
UNION

SELECT t.id_subyek AS id, dsn.Nama AS nama FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_subyek = o.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = o.id_user
WHERE t.status = 'terima'
AND t.id_obyek =$this->user_id
AND o.last_time>'$limittime' 
) f";
*/

$query="SELECT DISTINCT f.id, f.nama,f.foto
FROM (

SELECT t.id_subyek AS id, mhs.Nama AS nama,u.foto FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_subyek = o.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = o.id_user
INNER JOIN tgsakhir.user u ON mhs.NRP = u.id_user
WHERE t.status = 'terima'
AND t.id_obyek =$this->user_id
AND o.last_time>'$limittime' 
UNION SELECT t.id_obyek AS id, mhs.Nama AS nama,u.foto
FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_obyek = o.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = o.id_user
INNER JOIN tgsakhir.user u ON mhs.NRP = u.id_user
WHERE t.status = 'terima'
AND t.id_subyek = $this->user_id
AND o.last_time>'$limittime' 
UNION SELECT t.id_obyek AS id, dsn.Nama AS nama,u.foto
FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_obyek = o.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = o.id_user
INNER JOIN tgsakhir.user u ON dsn.NPK  = u.id_user
WHERE t.status = 'terima'
AND t.id_subyek = $this->user_id
AND o.last_time>'$limittime' 
UNION

SELECT t.id_subyek AS id, dsn.Nama,u.foto AS nama FROM tgsakhir.teman t
INNER JOIN tgsakhir.online o ON t.id_subyek = o.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = o.id_user
INNER JOIN tgsakhir.user u ON dsn.NPK = u.id_user
WHERE t.status = 'terima'
AND t.id_obyek =$this->user_id
AND o.last_time>'$limittime' 
) f";


		//if($this->db->query($query)==0)  {echo "Silakan <a href='index.php'>login</a> terlebih dahulu";}
       

		$friends=$this->db->fetch_all_array($query);
		return $friends;
         
	}
}

?>