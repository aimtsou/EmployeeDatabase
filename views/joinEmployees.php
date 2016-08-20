<?php
    include "../header.php";
?>

<h2>Employee - Financial Summary</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Οικονομικό Έτος</th>
<th>Μικτές Αποδοχές Έτους</th>
</tr>

<?php
	include "../models/joinEmployees.php";
    $employees = get_employees();
	
    foreach( $employees as $employee ) {
        echo "\n<tr>";
        
        echo "<td>" .  $employee[ 'AFM' ] . "</td>";
        echo "<td>" .  $employee[ 'Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Surname' ] . "</td>";
        echo "<td>" .  $employee[ 'Financial_Year' ] . "</td>";
        echo "<td>" .  $employee[ 'Miktes_Apodoxes_Etous' ] . "</td>"; 

        echo "</tr>";
    }
	 
?>
</table>


<?php
    include "../footer.php";
?>