<?php
    include "../header.php";
?>

<h2>Positions - Tameio1</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικος Θέσης‚</th>
<th>Τμήμα</th>
</tr>

<?php
	include "../models/nestedPositions.php";
    $positions = get_positions();
	
    foreach( $positions as $position ) {
        echo "\n<tr>";
        
        echo "<td>" .  $position[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $position[ 'Department' ] . "</td>";

        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>