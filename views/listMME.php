<?php
    include "../header.php";
?>

<h2>Media</h2>

<h4><th><a id='insert'  href="/db/views/modifyMME.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Μέσου</th>
<th>Όνομα</th>
<th>Τύπος Μέσου€</th>
</tr>

<?php
	include "../models/listMME.php";
    $mms = get_MME();
	
    foreach( $mms as $mm ) {
        echo "\n<tr>";
        
        echo "<td>" .  $mm[ 'Code_MME' ] . "</td>";
        echo "<td>" .  $mm[ 'Name' ] . "</td>";
        echo "<td>" .  $mm[ 'MME_Type' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>