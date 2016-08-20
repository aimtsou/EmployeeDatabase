<?php
    include "../header.php";
?>

<h2>Promotions</h2>

<h4><th><a id='insert'  href="/db/views/modifyPromotions.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>¡÷Ã</th>
<th>«Ï/Ìﬂ·</th>
<th>Õ›· »›ÛÁ</th>
</tr>

<?php
	include "../models/listPromotions.php";
    $proms = get_promotions();
	
    foreach( $proms as $prom ) {
        echo "\n<tr>";
        
        echo "<td>" .  $prom[ 'AFM' ] . "</td>";
        echo "<td>" .  $prom[ 'Date_Done' ] . "</td>";
        echo "<td>" .  $prom[ 'New_Pos' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>