<?php
    include "../header.php"
?>

<h2>Insert Providence</h2>


<form action="/db/models/insertProvidences.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Κωδικός Παροχών:</td><td> <input type="int" name="Code_Prov" /></td></tr>        	
    <tr class = "even"><td>Ταμείο Παροχών:</td><td> <input type="varchar" name="Tameio_Prov" /></td></tr>
    <tr class="odd"><td>Εισφορά Κλάδου Υγείας:</td><td> <input type="int" name="Eisfora_Kladou_Ygeias" /></td></tr>
	<tr class = "even"><td>Εισφορά Σύνταξης:</td><td> <input type="varchar" name="Eisfora_Syntakshs" /></td></tr>
    <tr class="odd"><td>Εισφορά Εφάπαξ:</td><td> <input type="int" name="Eisfora_Efapaks" /></td></tr>
	<tr class = "even"><td>Κρατήσεις Υγείας:</td><td> <input type="varchar" name="Krathseis_Ygeias" /></td></tr>
    <tr class="odd"><td>Κρατήσεις Σύνταξης:</td><td> <input type="int" name="Krathseis_Syntakshs" /></td></tr>
	
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyProvidences.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>