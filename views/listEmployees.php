<?php
    include "../header.php";
?>

<h2>Employees</h2>



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

        echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/groupEmployees.php">GROUP BY CHILDREN NUMBER</a></th> </h2>
<h4><th><a id='insert'  href="/db/views/joinEmployees.php">JOIN WITH FINANCIAL SUMMARY</a></th> </h4>
<h4><th><a id='insert'  href="/db/views/lastEmployees.php">SHOW LAST ADDED</a></th> </h4>

<?php
    include "../footer.php";
?>