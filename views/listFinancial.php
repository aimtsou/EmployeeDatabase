<?php
    include "../header.php";
?>

<h2>Financial Summary</h2>

<h4><th><a id='insert'  href="/db/views/modifyFinancial.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Οικονομικό Έτος</th>
<th>Μικτές Αποδοχές Έτους</th>
<th>Σύνολο Κρατήσεων Έτους‚</th>
</tr>

<?php
	include "../models/listFinancial.php";
    $fins = get_financial();
	
    foreach( $fins as $fin ) {
        echo "\n<tr>";
        
        echo "<td>" .  $fin[ 'AFM' ] . "</td>";
        echo "<td>" .  $fin[ 'Financial_Year' ] . "</td>";
        echo "<td>" .  $fin[ 'Miktes_Apodoxes_Etous' ] . "</td>";
		echo "<td>" .  $fin[ 'Sunolo_Krathsewn_Etous' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>