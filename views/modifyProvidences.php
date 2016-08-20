<?php
    include "../header.php";
?>

<h2>Providences</h2>
<h4><th><a id='insert'  href="/db/views/createProvidences.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Παροχών</th>
<th>Ταμείο Παροχών</th>
<th>Εισφορά Κλάδου Υγείας</th>
<th>Εισφορά Σύνταξης</th>
<th>Εισφορά Εφάπαξ</th>
<th>Κρατήσεις Υγείας</th>
<th>Κρατήσεις Σύνταξης</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listProvidences.php";
    $provs = get_providences();
	
    foreach( $provs as $prov ) {
        echo "\n<tr>";
        
		echo "<td>" .  $prov[ 'Code_Prov' ] . "</td>";
        echo "<td>" .  $prov[ 'Tameio_Prov' ] . "</td>";
        echo "<td>" .  $prov[ 'Eisfora_Kladou_Ygeias' ] . "</td>";
		echo "<td>" .  $prov[ 'Eisfora_Syntakshs' ] . "</td>";
		echo "<td>" .  $prov[ 'Eisfora_Efapaks' ] . "</td>";
		echo "<td>" .  $prov[ 'Krathseis_Ygeias' ] . "</td>";
		echo "<td>" .  $prov[ 'Krathseis_Syntakshs' ] . "</td>";
		
		echo "<td><form action='/db/views/updateProvidences.php' method='post'>";
		echo "<input type='hidden' name='Code_Prov' value=" . $prov[ 'Code_Prov' ] . "/>";
        echo "<input type='hidden' name='Tameio_Prov' value=" . $prov[ 'Tameio_Prov' ] . "/>";
        echo "<input type='hidden' name='Eisfora_Kladou_Ygeias' value=" . $prov[ 'Eisfora_Kladou_Ygeias' ] . "/>";
		echo "<input type='hidden' name='Eisfora_Syntakshs' value=" . $prov[ 'Eisfora_Syntakshs' ] . "/>";
		echo "<input type='hidden' name='Eisfora_Efapaks' value=" . $prov[ 'Eisfora_Efapaks' ] . "/>";
		echo "<input type='hidden' name='Krathseis_Ygeias' value=" . $prov[ 'Krathseis_Ygeias' ] . "/>";
		echo "<input type='hidden' name='Krathseis_Syntakshs' value=" . $prov[ 'Krathseis_Syntakshs' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteProvidences.php' method='post'>";
        echo "<input type='hidden' name='Code_Prov' value=" . $prov[ 'Code_Prov' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>