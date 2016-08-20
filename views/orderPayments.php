<?php
    include "../header.php";
?>

<h2>Payments</h2>

<h4><th><a id='insert'  href="/db/views/modifyPayments.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Πληρωμής</th>
<th>Ημερομίσθιο</th>
<th>Ημέρες Εργασίας‚</th>
<th>Φόρος‚</th>
<th>Χαρτόσημο</th>
</tr>

<?php
	include "../models/orderPayments.php";
    $pays = get_payments();
	
    foreach( $pays as $pay ) {
        echo "\n<tr>";
        
        echo "<td>" .  $pay[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Day_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Days_Worked' ] . "</td>";
		echo "<td>" .  $pay[ 'Tax' ] . "</td>";
		echo "<td>" .  $pay[ 'Chartosimo' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>

<?php
    include "../footer.php";
?>