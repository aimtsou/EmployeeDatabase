<?php
    include "../header.php";
?>

<h2>Employee-Position View</h2>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Κωδικός Θέσης</th>
<th>Τμήμα</th>
<th>Κωδικός Πληρωμής</th>
<th>Κωδικός Παροχών</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listEmpPos.php";
    $eps = get_eps();
	
    foreach( $eps as $ep ) {
        echo "\n<tr>";
        
        echo "<td>" .  $ep[ 'AFM' ] . "</td>";
        echo "<td>" .  $ep[ 'Name' ] . "</td>";
        echo "<td>" .  $ep[ 'Surname' ] . "</td>";
        echo "<td>" .  $ep[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $ep[ 'Department' ] . "</td>"; 
        echo "<td>" .  $ep[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $ep[ 'Code_Prov' ] . "</td>";


          
        echo "<td><form action='/db/views/updateEmpPos.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $ep[ 'AFM' ] . "/>";
        echo "<input type='hidden' name='Name' value=" . $ep[ 'Name' ] . "/>";
        echo "<input type='hidden' name='Surname' value=" . $ep[ 'Surname' ] . "/>";
        echo "<input type='hidden' name='Code_Pos' value=" . $ep[ 'Code_Pos' ] . "/>";
        echo "<input type='hidden' name='Department' value=" . $ep[ 'Department' ] . "/>";
        echo "<input type='hidden' name='Code_Pay' value=" . $ep[ 'Code_Pay' ] . "/>";
        echo "<input type='hidden' name='Code_Prov' value=" . $ep[ 'Code_Prov' ] . "/>";
		
        echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteEmpPos.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $ep[ 'AFM' ] . "/>";
		echo "<input type='hidden' name='Code_Pos' value=" . $ep[ 'Code_Pos' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>