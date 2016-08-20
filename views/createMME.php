<?php
    include "../header.php"
?>

<h2>Insert Media</h2>


<form action="/db/models/insertMME.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Κωδικός Μέσου:</td><td> <input type="int" name="Code_MME" /></td></tr>	
    <tr class = "even"><td>Όνομα:</td><td> <input type="varchar" name="Name" /></td></tr>
    <tr class="odd"><td>Τύπος Μέσου:</td><td> <input type="varchar" name="MME_Type" /></td></tr>

    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyMME.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>