<?php
    include "../header.php";
?>

<h2>Employees</h2>
<h4><th><a id='insert'  href="/db/views/createEmployees.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Οδός</th>
<th>Αριθμός</th>
<th>ΤΚ</th>
<th>Ειδικότητα</th>
<th>Επίπεδο Εκπαίδευσης</th>
<th>Οικογενειακή Κατάσταση</th>
<th>Αριθμός Τέκνων</th>
<th>Κωδικός Θέσης</th>
<th>Ημ/νία Έναρξης</th>
<th>Ημ/νία Λήξης</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listEmployees.php";
    $employees = get_employees();
	
    foreach( $employees as $employee ) {
        echo "\n<tr>";
        
        echo "<td>" .  $employee[ 'AFM' ] . "</td>";
        echo "<td>" .  $employee[ 'Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Surname' ] . "</td>";
        echo "<td>" .  $employee[ 'Street' ] . "</td>";
        echo "<td>" .  $employee[ 'S_Number' ] . "</td>"; 
        echo "<td>" .  $employee[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $employee[ 'Speciality' ] . "</td>";
        echo "<td>" .  $employee[ 'Train_Level' ] . "</td>";
        echo "<td>" .  $employee[ 'Family_Status' ] . "</td>";
        echo "<td>" .  $employee[ 'Children_No' ] . "</td>";
		echo "<td>" .  $employee[ 'Code_Pos' ] . "</td>";
		echo "<td>" .  $employee[ 'Date_Start' ] . "</td>";
		echo "<td>" .  $employee[ 'Date_End' ] . "</td>";


          
        echo "<td><form action='/db/views/updateEmployees.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $employee[ 'AFM' ] . "/>";
        echo "<input type='hidden' name='Name' value=" . $employee[ 'Name' ] . "/>";
        echo "<input type='hidden' name='Surname' value=" . $employee[ 'Surname' ] . "/>";
        echo "<input type='hidden' name='Street' value=" . $employee[ 'Street' ] . "/>";
        echo "<input type='hidden' name='S_Number' value=" . $employee[ 'S_Number' ] . "/>";
        echo "<input type='hidden' name='Postal_Code' value=" . $employee[ 'Postal_Code' ] . "/>";
        echo "<input type='hidden' name='Speciality' value=" . $employee[ 'Speciality' ] . "/>";
        echo "<input type='hidden' name='Train_Level' value=" . $employee[ 'Train_Level' ] . "/>";
        echo "<input type='hidden' name='Family_Status' value=" . $employee[ 'Family_Status' ] . "/>";
        echo "<input type='hidden' name='Children_No' value=" . $employee[ 'Children_No' ] . "/>";
		echo "<input type='hidden' name='Code_Pos' value=" . $employee[ 'Code_Pos' ] . "/>";
		echo "<input type='hidden' name='Date_Start' value=" . $employee[ 'Date_Start' ] . "/>";
		echo "<input type='hidden' name='Date_End' value=" . $employee[ 'Date_End' ] . "/>";
		
        echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteEmployees.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $employee[ 'AFM' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>