<?php
    include "../header.php";
?>

<h2>Financial Summary</h2>
<h4><th><a id='insert'  href="/db/views/createFinancial.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Οικονομικό Έτος</th>
<th>Μικτές Αποδοχές Έτους‚</th>
<th>Σύνολο Κρατήσεων Έτους‚</th>
<th></th>
<th></th>
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
		
		echo "<td><form action='/db/views/updateFinancial.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $fin[ 'AFM' ] . "/>";
        echo "<input type='hidden' name='Financial_Year' value=" . $fin[ 'Financial_Year' ] . "/>";
        echo "<input type='hidden' name='Miktes_Apodoxes_Etous' value=" . $fin[ 'Miktes_Apodoxes_Etous' ] . "/>";
		echo "<input type='hidden' name='Sunolo_Krathsewn_Etous' value=" . $fin[ 'Sunolo_Krathsewn_Etous' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteFinancial.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $fin[ 'AFM' ] . "/>";
		echo "<input type='hidden' name='Financial_Year' value=" . $fin[ 'Financial_Year' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>