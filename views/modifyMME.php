<?php
    include "../header.php";
?>

<h2>Media</h2>
<h4><th><a id='insert'  href="/db/views/createMME.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Μέσου</th>
<th>Όνομα</th>
<th>Τύπος Μέσου€</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listMME.php";
    $mms = get_MME();
	
    foreach( $mms as $mm ) {
        echo "\n<tr>";
        
        echo "<td>" .  $mm[ 'Code_MME' ] . "</td>";
        echo "<td>" .  $mm[ 'Name' ] . "</td>";
        echo "<td>" .  $mm[ 'MME_Type' ] . "</td>";
		
		echo "<td><form action='/db/views/updateMME.php' method='post'>";
        echo "<input type='hidden' name='Code_MME' value=" . $mm[ 'Code_MME' ] . "/>";
        echo "<input type='hidden' name='Name' value=" . $mm[ 'Name' ] . "/>";
        echo "<input type='hidden' name='MME_Type' value=" . $mm[ 'MME_Type' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteMME.php' method='post'>";
        echo "<input type='hidden' name='Code_MME' value=" . $mm[ 'Code_MME' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>