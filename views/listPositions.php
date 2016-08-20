<?php
    include "../header.php";
?>

<h2>Positions</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικος Θέσης</th>
<th>Τμήμα</th>
<th>Ειδικότητα</th>
<th>Αριθμός</th>
<th>Άδειες Θέσεις</th>
<th>Κωδικός Πληρωμής</th>
<th>Κωδικός Παροχών</th>
</tr>

<?php
	include "../models/listPositions.php";
    $positions = get_positions();
	
    foreach( $positions as $position ) {
        echo "\n<tr>";
        
        echo "<td>" .  $position[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $position[ 'Department' ] . "</td>";
        echo "<td>" .  $position[ 'Code_Prov' ] . "</td>";
        echo "<td>" .  $position[ 'P_Number' ] . "</td>";
        echo "<td>" .  $position[ 'Empty_Pos' ] . "</td>"; 
        echo "<td>" .  $position[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $position[ 'Code_Prov' ] . "</td>";

        echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/nestedPositions.php">ΤΑΜΕΙΟ ΠΑΡΟΧΩΝ: Tameio1</a></th> </h2>

<?php
    include "../footer.php";
?>