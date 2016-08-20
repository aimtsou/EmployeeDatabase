<?php
    include "../header.php";
?>

<h2>Positions</h2>
<h4><th><a id='insert'  href="/db/views/createPositions.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικος Θέσης</th>
<th>Τμήμα</th>
<th>Ειδικότητα</th>
<th>Αριθμός</th>
<th>Άδειες Θέσεις</th>
<th>Κωδικός Πληρωμής</th>
<th>Κωδικός Παροχών</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listPositions.php";
    $positions = get_positions();
	
    foreach( $positions as $position ) {
        echo "\n<tr>";
        
        echo "<td>" .  $position[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $position[ 'Department' ] . "</td>";
        echo "<td>" .  $position[ 'Speciality' ] . "</td>";
        echo "<td>" .  $position[ 'P_Number' ] . "</td>";
        echo "<td>" .  $position[ 'Empty_Pos' ] . "</td>"; 
        echo "<td>" .  $position[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $position[ 'Code_Prov' ] . "</td>";
		
		echo "<td><form action='/db/views/updatePositions.php' method='post'>";
        echo "<input type='hidden' name='Code_Pos' value=" . $position[ 'Code_Pos' ] . "/>";
        echo "<input type='hidden' name='Department' value=" . $position[ 'Department' ] . "/>";
        echo "<input type='hidden' name='Speciality' value=" . $position[ 'Speciality' ] . "/>";
        echo "<input type='hidden' name='P_Number' value=" . $position[ 'P_Number' ] . "/>";
        echo "<input type='hidden' name='Empty_Pos' value=" . $position[ 'Empty_Pos' ] . "/>";
        echo "<input type='hidden' name='Code_Pay' value=" . $position[ 'Code_Pay' ] . "/>";
        echo "<input type='hidden' name='Code_Prov' value=" . $position[ 'Code_Prov' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deletePositions.php' method='post'>";
        echo "<input type='hidden' name='Code_Pos' value=" . $position[ 'Code_Pos' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>