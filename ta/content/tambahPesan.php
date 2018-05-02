<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>TextboxList + Autocomplete demo</title>
    
  <link rel="stylesheet" href="../script/AutocompleteList/test.css" type="text/css" media="screen" title="Test Stylesheet" charset="utf-8" />
    
    <script src="../script/AutocompleteList/mootools-beta-1.2b1.js" type="text/javascript" charset="utf-8"></script>
    <!--<script src="textboxlist.js" type="text/javascript" charset="utf-8"></script>-->
    <script src="../script/AutocompleteList/textboxlist.compressed.js" type="text/javascript" charset="utf-8"></script>
    <script src="../script/AutocompleteList/test.js" type="text/javascript" charset="utf-8"></script>
    <script src="../script/simpanPesan.js" type="text/javascript" charset="utf-8"></script>

  <link rel="stylesheet" href="../style.css" type="text/css" media="screen" title="Test Stylesheet" charset="utf-8" />
  </head>
  
  <body id="test" >    
  <table align="center">
  <tr><td>Untuk</td><td>:</td>
  <td width="250" style="max-width:250px" >
    <ol style="background-color:#FFF">
          
          <input type="text"  width="250" style="max-width:250px" id="facebook-demo" style="background-color:#FFF" />
          <div width="250" style="max-width:250px"  id="facebook-auto" style="background-color:#FFF">
            <div width="250" style="max-width:250px"  class="default" style="background-color:#FFF">Pilih nama teman</div>
            <ul class="feed" id="listTeman" style="background-color:#FFF">
              
            </ul>
          </div>
          </ol>
          </td></tr>
       <tr><td>Subyek Pesan</td><td>:</td>
           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="" id="subyekPesan" /></td>
           </tr>
           <tr><td>Isi Pesan</td><td>:</td>
           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="isiPesan"></textarea></td>
           </tr>
       <tr><td colspan="3" align="center"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:simpanPesan()">Join&nbsp;Now!</a>
                                            		</span>
                                            	</p></td></tr>
    </table>     
    

  </body>  
</html>