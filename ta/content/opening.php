
<div class="art-Block">
    <div class="art-Block-body">
                <div class="art-BlockHeader">
                    <div class="l"></div>
                    <div class="r"></div>
                    <div class="art-header-tag-icon">
                        <div class="t">Selamat Datang</div>
                    </div>
                </div><div class="art-BlockContent">
                    <div class="art-BlockContent-tl"></div>
                    <div class="art-BlockContent-tr"></div>
                    <div class="art-BlockContent-bl"></div>
                    <div class="art-BlockContent-br"></div>
                    <div class="art-BlockContent-tc"></div>
                    <div class="art-BlockContent-bc"></div>
                    <div class="art-BlockContent-cl"></div>
                    <div class="art-BlockContent-cr"></div>
                    <div class="art-BlockContent-cc"></div>
                    <div class="art-BlockContent-body">
                        
                        <? 
                        if($masterAmbilSemua[foto]=="") echo "<table border='0'><tr><td><img src='images/01.png' width='30' height='30'></td>";
                        else
                        echo "<table border='0'><tr><td><img src=\"thumb1.php?img=$masterAmbilSemua[foto]&lebar=30\"></td>";
                        echo "<td><a href='profile.php'>$masterAmbilSemua[Nama]</a></td></tr></table>" ?>
                    </div>
                </div>
        <div class="cleared"></div>
    </div>
</div>
