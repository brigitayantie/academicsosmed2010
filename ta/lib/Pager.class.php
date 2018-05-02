<?php 
/* Author : Hendra Dinata */

define('PENGGANTI_PETIK','*-*');

  class Pager {
	  var $pages;
	  var $limit;
	  var $argvAdditional;
	  var $start;
	
	function Pager($limit, $rows, $page=1, $argvAdditional="") {
		$this->limit = $limit;
		$this->start = $this->findStart($page);
		$this->SetArgvAdditional($argvAdditional);
		$this->pages = $this->findPages($rows);
	}
	
	function SetArgvAdditional($argvAdditional) {		
		$this->argvAdditional = str_replace("'", PENGGANTI_PETIK, $argvAdditional);	
	}
	
	function GetLimit() {
		return $this->limit;
	}
	
   function findStart($page) { 
     if ((!isset($page)) || ($page == "1")) 
      { 
       $start = 0; 
       $page = 1; 
      } 
     else 
      { 
       $start = ($page-1) * $this->limit; 
      } 

     return $start; 
    } 
  /*
   * int findPages (int count, int limit) 
   * Returns the number of pages needed based on a count and a limit 
   */ 
   function findPages($count) 
    { 
     $pages = (($count % $this->limit) == 0) ? $count / $this->limit : floor($count / $this->limit) + 1; 

     return $pages; 
    } 
  /* 
   * string pageList (int curpage, int pages) 
   * Returns a list of pages in the format of "« < [pages] > »" 
   **/ 
   function pageList($curpage) 
    { 
     $page_list  = ""; 
	 $pages = $this->pages;
     /* Print the first and previous page links if necessary */ 
     if (($curpage != 1) && ($curpage)) 
      { 
       $page_list .= "  <a href=\"javascript: PagingAJAX(1,'page=1".$this->argvAdditional."')\" title=\"First Page\"><<</a> "; 
      } 

     if (($curpage-1) > 0) 
      { 
       $page_list .= "<a href=\"javascript: PagingAJAX(".($curpage-1).",'page=".($curpage-1).$this->argvAdditional."')\" title=\"Previous Page\"><</a> "; 
      } 

     /* Print the numeric page list; make the current page unlinked and bold */ 
	 $selisih = 1; $tambah_atas=0;;
	 if (($curpage-$selisih) < 1) {$batasBawah=1; $tambah_atas=1;} else $batasBawah=($curpage-$selisih);
	 if (($curpage+$selisih)>$pages) {$batasAtas=$pages; $tambah_atas=2;} else $batasAtas=($curpage+$selisih);
	 if ((2*$selisih)+1<=$pages) if ($tambah_atas==1) $batasAtas++; else if($tambah_atas==2) $batasBawah--;
     for ($i=$batasBawah; $i<=$batasAtas; $i++) 
      { 
       if ($i == $curpage) 
        { 
         $page_list .= "<b>".$i."</b>"; 
        } 
       else 
        { 
         $page_list .= "<a href=\"javascript: PagingAJAX(".$i.",'page=".$i.$this->argvAdditional."')\" title='Page ".$i."'>".$i."</a>"; 
        } 
       $page_list .= " "; 
      } 

     /* Print the Next and Last page links if necessary */ 
     if (($curpage+1) <= $pages) 
      { 
       $page_list .= "<a href=\"javascript: PagingAJAX(".($curpage+1).",'page=".($curpage+1).$this->argvAdditional."')\" title=\"Next Page\">></a> "; 
      } 

     if (($curpage != $pages) && ($pages != 0)) 
      { 
       $page_list .= "<a href=\"javascript: PagingAJAX(".$pages.",'page=".$pages.$this->argvAdditional."')\" title=\"Last Page\">>></a> "; 
      } 
     //$page_list .= "</td>\n"; 

     return $page_list; 
    } 
  /*
   * string nextPrev (int curpage, int pages) 
   * Returns "Previous | Next" string for individual pagination (it's a word!) 
  */ 
   function nextPrev($curpage, $pages) 
    { 
     $next_prev  = ""; 

     if (($curpage-1) <= 0) 
      { 
       $next_prev .= "Previous"; 
      } 
     else 
      { 
       $next_prev .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\">Previous</a>"; 
      } 

     $next_prev .= " | "; 

     if (($curpage+1) > $pages) 
      { 
       $next_prev .= "Next"; 
      } 
     else 
      { 
       $next_prev .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Next</a>"; 
      } 

     return $next_prev; 
    } 
  } 
  
  
  /*
  object type=Hidden di html

tampilMatkul()
{
	varPage = parent.document.getElementById("page").value;
			
	var params = "cmbFakultas=" + varFakultas + "&cmbJurusan=" + varJurusan + "&peran=matkul" + "&page=" + varPage;

}

function PagingAJAX(page,conditional)
{
	parent.document.getElementById("page").value=page;
	tampilMatkul();
}

(tambahan di AJAX)

$page=$_POST["page"];

$baris = 2;

$query = "SELECT matkul.* FROM tbljurusanpnymatkul,matkul WHERE  tbljurusanpnymatkul.id_jurusan=" . $id_jurusan . " AND matkul.id_matkul=tbljurusanpnymatkul.id_matkul";

$limit=3;
$hasilQuery = mysql_query($query);
$jumRow = mysql_num_rows($hasilQuery);
$objPage=New Pager($limit,$jumRow,$page);
$start = $objPage->findStart($page);

$query = "SELECT matkul.* FROM tbljurusanpnymatkul,matkul WHERE  tbljurusanpnymatkul.id_jurusan=" . $id_jurusan . " AND matkul.id_matkul=tbljurusanpnymatkul.id_matkul LIMIT $start,$limit";


  */
  

?> 

