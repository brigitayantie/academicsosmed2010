<? session_start();

?>
<script type="text/javascript" src="../script/tabber/cookies.js"></script>
<script type="text/javascipt" src="../script/cariJadwalAjar.js"></script>
<!-- Include the tabber code -->
<script type="text/javascript" src="../script/tabber/tabber.js"></script>
<link rel="stylesheet" href="../script/tabber/example.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="../script/tabber/example-print.css" TYPE="text/css" MEDIA="print">
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />

<div class="tabber" id="mytabber1">

     
     <div class="tabbertab">
	  <h2>Daftar Murid</h2>
	  <p>
      			   <? include "daftarMurid.php"; ?>
             
                
                    </p>
     </div>
     <div class="tabbertab">
	  <h2>Tambah Jadwal UTS</h2>
	  <p>
      			   <? include "tambahJadwalKuis.php"; ?>
             
                
                    </p>
     </div>
     <div class="tabbertab">
	  <h2>Tambah Jadwal UAS</h2>
	  <p>
      			   <? include "tambahJadwalTugas.php"; ?>
             
                
                    </p>
     </div>
     <div class="tabbertab">
	  <h2>Lihat Jadwal Kuis dan Tugas beserta %</h2>
	  <p>
      			   <? include "tampilJadwalKT.php"; ?>
             
                
                    </p>
     </div>
      <div class="tabbertab">
	  <h2>Bahan</h2>
	  <p>
      			   <? include "uploadBahan.php"; ?>
             
                
                    </p>
     </div>

</div>
