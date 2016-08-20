<?php
    include "../header.php";
?>

<h2>Last Added Employees</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>

</tr>

<?php
	include "../models/lastEmployees.php";
    $employees = get_employees();
	
    foreach( $employees as $employee ) {
        echo "\n<tr>";
        
        echo "<td>" .  $employee[ 'AFM2' ] . "</td>";
        echo "<td>" .  $employee[ 'Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Surname' ] . "</td>";


        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>