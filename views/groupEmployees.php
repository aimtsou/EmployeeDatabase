<?php
    include "../header.php";
?>

<h2>Employee-Children</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Αριθμός Τέκνων</th>
<th>Σύνολο</th>
</tr>

<?php
	include "../models/groupEmployees.php";
    $employees = get_employees();
	
    foreach( $employees as $employee ) {
        echo "\n<tr>";
                
		echo "<td>" .  $employee[ 'Name' ] . "</td>";
		echo "<td>" .  $employee[ 'Surname' ] . "</td>";
		echo "<td>" .  $employee[ 'Children_No' ] . "</td>";
		echo "<td>" .  $employee[ 'Total' ] . "</td>";

        echo "</tr>";
    }
	 
?>
</table>


<?php
    include "../footer.php";
?>