<?php
    include "../header.php";
?>

<h2>Payments</h2>
<h4><th><a id='insert'  href="/db/views/createPayments.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Πληρωμής</th>
<th>Ημερομίσθιο</th>
<th>Ημέρες Εργασίας‚</th>
<th>Φόρος‚</th>
<th>Χαρτόσημο</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listPayments.php";
    $pays = get_payments();
	
    foreach( $pays as $pay ) {
        echo "\n<tr>";
        
        echo "<td>" .  $pay[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Day_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Days_Worked' ] . "</td>";
		echo "<td>" .  $pay[ 'Tax' ] . "</td>";
		echo "<td>" .  $pay[ 'Chartosimo' ] . "</td>";
		
		echo "<td><form action='/db/views/updatePayments.php' method='post'>";
        echo "<input type='hidden' name='Code_Pay' value=" . $pay[ 'Code_Pay' ] . "/>";
        echo "<input type='hidden' name='Day_Pay' value=" . $pay[ 'Day_Pay' ] . "/>";
        echo "<input type='hidden' name='Days_Worked' value=" . $pay[ 'Days_Worked' ] . "/>";
		echo "<input type='hidden' name='Tax' value=" . $pay[ 'Tax' ] . "/>";
		echo "<input type='hidden' name='Chartosimo' value=" . $pay[ 'Chartosimo' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deletePayments.php' method='post'>";
        echo "<input type='hidden' name='Code_Pay' value=" . $pay[ 'Code_Pay' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>