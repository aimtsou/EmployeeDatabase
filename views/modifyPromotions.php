<?php
    include "../header.php";
?>

<h2>Promotions</h2>
<h4><th><a id='insert'  href="/db/views/createPromotions.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Ημ/νία</th>
<th>Νέα Θέση</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listPromotions.php";
    $proms = get_promotions();
	
    foreach( $proms as $prom ) {
        echo "\n<tr>";
        
        echo "<td>" .  $prom[ 'AFM' ] . "</td>";
        echo "<td>" .  $prom[ 'Date_Done' ] . "</td>";
        echo "<td>" .  $prom[ 'New_Pos' ] . "</td>";
		
		echo "<td><form action='/db/views/updatePromotions.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $prom[ 'AFM' ] . "/>";
        echo "<input type='hidden' name='Date_Done' value=" . $prom[ 'Date_Done' ] . "/>";
        echo "<input type='hidden' name='New_Pos' value=" . $prom[ 'New_Pos' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deletePromotions.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $prom[ 'AFM' ] . "/>";
		echo "<input type='hidden' name='Date_Done' value=" . $prom[ 'Date_Done' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>