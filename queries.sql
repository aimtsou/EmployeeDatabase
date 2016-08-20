--Ακολουθούν όλα τα queries που χρησιμοποιήθηκαν στην κατασκευή του GUI
--Όλα τα queries INSERT, DELETE και UPDATE χρησιμοποιούνται για να μπορεί να διαχειριστεί τα δεδομένα της βάσης ο χρήστης

---------------------------------------------------------------------

--Αρχικά ας δούμε τα queries που χρησιμοποιήθηκαν για την παρουσίαση των πινάκων
SELECT * FROM EMPLOYEE

SELECT * FROM EVALUATION

SELECT * FROM FINANCIAL_SUMMARY

SELECT * FROM MME

SELECT * FROM PAYMENT

SELECT * FROM POSITION

SELECT * FROM PROMOTION

SELECT * FROM PROVIDENCE

SELECT * FROM RECRUITMENT
--Όπως βλέπετε είναι μία απλή SELECT που επιστρέφει όλες τις σειρές που περιέχονται στους αντίστοιχους πίνακες

---------------------------------------------------------------------------

--Ακολουθούν τα queries για την ενημέρωση των πινάκων για αλλαγές στα υπάρχοντα δεδομένα
UPDATE
			EMPLOYEE
		SET
			AFM=$_POST[AFM],
			Name='$_POST[Name]',
			Surname='$_POST[Surname]',
			Street='$_POST[Street]',
			S_Number=$_POST[S_Number],
			Postal_Code=$_POST[Postal_Code],
			Speciality='$_POST[Speciality]',
			Train_Level='$_POST[Train_Level]',
			Family_Status='$_POST[Family_Status]',
			Children_No=$_POST[Children_No],
			Code_Pos=$_POST[Code_Pos],
			Date_Start='$_POST[Date_Start]',
			Date_End='$_POST[Date_End]'
		WHERE
			AFM='$_POST[AFM]'

UPDATE
			EVALUATION
		SET
			AFM='$_POST[AFM]',
			Date_Done='$_POST[Date_Done]',
			Score='$_POST[Score]'
		WHERE
			AFM='$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'

UPDATE
			FINANCIAL_SUMMARY
		SET
			AFM=$_POST[AFM],
			Financial_Year='$_POST[Financial_Year]',
			Miktes_Apodoxes_Etous=$_POST[Miktes_Apodoxes_Etous],
			Sunolo_Krathsewn_Etous=$_POST[Sunolo_Krathsewn_Etous]
		WHERE
			AFM='$_POST[AFM]' AND Financial_Year='$_POST[Financial_Year]'

UPDATE
			MME
		SET
			Code_MME=$_POST[Code_MME],
			Name='$_POST[Name]',
			MME_Type='$_POST[MME_Type]'
		WHERE
			Code_MME='$_POST[Code_MME]'

UPDATE
			PAYMENT
		SET
			Code_Pay=$_POST[Code_Pay],
			Day_Pay='$_POST[Day_Pay]',
			Days_Worked=$_POST[Days_Worked],
			Tax=$_POST[Tax],
			Chartosimo=$_POST[Chartosimo]			
		WHERE
			Code_Pay='$_POST[Code_Pay]'

UPDATE
			POSITION
		SET
			Code_Pos='$_POST[Code_Pos]',
			Department='$_POST[Department]',
			Speciality='$_POST[Speciality]',
			P_Number=$_POST[P_Number],
			Empty_Pos=$_POST[Empty_Pos],
			Code_Pay=$_POST[Code_Pay],
			Code_Prov=$_POST[Code_Prov]
		WHERE
			Code_Pos='$_POST[Code_Pos]'

UPDATE
			PROMOTION
		SET
			AFM=$_POST[AFM],
			Date_Done='$_POST[Date_Done]',
			New_Pos='$_POST[New_Pos]'
		WHERE
			AFM='$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'

UPDATE
			PROVIDENCE
		SET
			Code_Prov=$_POST[Code_Prov],
			Tameio_Prov='$_POST[Tameio_Prov]',
			Eisfora_Kladou_Ygeias=$_POST[Eisfora_Kladou_Ygeias],
			Eisfora_Syntakshs=$_POST[Eisfora_Syntakshs],
			Eisfora_Efapaks=$_POST[Eisfora_Efapaks],
			Krathseis_Ygeias=$_POST[Krathseis_Ygeias],
			Krathseis_Syntakshs=$_POST[Krathseis_Syntakshs]
		WHERE
			Code_Prov='$_POST[Code_Prov]'

UPDATE
			RECRUITMENT
		SET
			Code_Pos=$_POST[Code_Pos],
			Code_MME=$_POST[Code_MME],
			Date_Pub='$_POST[Date_Pub]',
			Duration='$_POST[Duration]'
		WHERE
			Code_Pos='$_POST[Code_Pos]' AND Code_MME='$_POST[Code_MME]' AND Date_Pub='$_POST[Date_Pub]'
--Προκειται για υπολοίηση με την UPDATE και είναι όμοια για όλους, σχεδόν τους πίνακες.
--Διαφορές υπήρξαν μόνο σε πίνακες όπου το Primary Key ήταν composite και συνεπώς χρησιμοποιήθηκε διαφορετική σύνταξη μετά το WHERE.
			
----------------------------------------------------------------------------------------------

--Συνεχίζουμε με τα queries για την διαγραφή δεδομένων από τους πίνακες.
DELETE FROM EMPLOYEE WHERE AFM = '$_POST[AFM]'

DELETE FROM EVALUATION WHERE AFM = '$_POST[AFM]' AND Date_Done = '$_POST[Date_Done]'

DELETE FROM FINANCIAL_SUMMARY WHERE AFM = '$_POST[AFM]' AND Financial_Year = '$_POST[Financial_Year]'

DELETE FROM MME WHERE Code_MME = '$_POST[Code_MME]'

DELETE FROM PAYMENT WHERE Code_Pay = '$_POST[Code_Pay]'

DELETE FROM POSITION WHERE Code_Pos = '$_POST[Code_Pos]'

DELETE FROM PROMOTION WHERE AFM = '$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'	
			
DELETE FROM PROVIDENCE WHERE Code_Prov = '$_POST[Code_Prov]'

DELETE FROM RECRUITMENT WHERE Code_Pos = '$_POST[Code_Pos]' AND Code_MME='$_POST[Code_MME]' AND Date_Pub='$_POST[Date_Pub]'
--Απλή υλοποίηση της DELETE όπου χρησιμοποιήθηκε το Primary Key του κάθε πίνακα για τον σωστό εντοπισμό της γραμμής που θέλουμε να διαγράψουμε.

-----------------------------------------------------------------------------------------------

--Συνεχίζουμε με τα queries για την προσθήκη νέων δεδομένων στους πίνακες.
INSERT INTO EMPLOYEE (
        AFM,
        Name,
        Surname,
        Street,
        S_Number,
        Postal_Code,
        Speciality,
        Train_Level,
        Family_Status,
        Children_No,
		Code_Pos,
		Date_Start,
		Date_End
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Name]',
        '$_POST[Surname]',
        '$_POST[Street]', 
        $_POST[S_Number],
        $_POST[Postal_Code],
        '$_POST[Speciality]',
        '$_POST[Train_Level]',
        '$_POST[Family_Status]',
        $_POST[Children_No],
		$_POST[Code_Pos],
		'$_POST[Date_Start]',
		'$_POST[Date_End]'
    )

INSERT INTO EVALUATION (
        AFM,
		Date_Done,
		Score
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Date_Done]',
        '$_POST[Score]'
    )

INSERT INTO FINANCIAL_SUMMARY (
        AFM,
		Financial_Year,
		Miktes_Apodoxes_Etous,
		Sunolo_Krathsewn_Etous		
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Financial_Year]',
        $_POST[Miktes_Apodoxes_Etous],
		$_POST[Sunolo_Krathsewn_Etous]
    )

INSERT INTO MME (
        Code_MME,
		Name,
		MME_Type
    )
    VALUES (
        $_POST[Code_MME],
        '$_POST[Name]',
        '$_POST[MME_Type]'
    )

INSERT INTO PAYMENT (
        Code_Pay,
		Day_Pay,
		Days_Worked,
		Tax,
		Chartosimo
    )
    VALUES (
        $_POST[Code_Pay],
        '$_POST[Day_Pay]',
        $_POST[Days_Worked],
		$_POST[Tax],
		$_POST[Chartosimo]
    )

INSERT INTO POSITION (
        Code_Pos,
        Department,
        Speciality,
        P_Number,
        Empty_Pos,
        Code_Pay,
        Code_Prov
    )
    VALUES (
        $_POST[Code_Pos],
        '$_POST[Department]',
        '$_POST[Speciality]',
        '$_POST[P_Number]', 
        $_POST[Empty_Pos],
        $_POST[Code_Pay],
        '$_POST[Code_Prov]'
    )

INSERT INTO PROMOTION (
        AFM,
		Date_Done,
		New_Pos	
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Date_Done]',
        '$_POST[New_Pos]'
    )

INSERT INTO PROVIDENCE (
        Code_Prov,
		Tameio_Prov,
		Eisfora_Kladou_Ygeias,
		Eisfora_Syntakshs,
		Eisfora_Efapaks,
		Krathseis_Ygeias,
		Krathseis_Syntakshs
    )
    VALUES (
        $_POST[Code_Prov],
        '$_POST[Tameio_Prov]',
        $_POST[Eisfora_Kladou_Ygeias],
		$_POST[Eisfora_Syntakshs],
		$_POST[Eisfora_Efapaks],
		$_POST[Krathseis_Ygeias],
		$_POST[Krathseis_Syntakshs]
    )

INSERT INTO RECRUITMENT (
        Code_Pos,
		Code_MME,
		Date_Pub,
		Duration	
    )
    VALUES (
        $_POST[Code_Pos],
        $_POST[Code_MME],
		'$_POST[Date_Pub]',
        $_POST[Duration]
    )
--Απλή υλοποίηση της INSERT όπου αναφερόμαστε σε κάθε ένα από τα πεδία του κάθε πίνακα και αντιστοιχούμε τις τιμές από την φόρμα που έχει συμπληρώσει ο χρήστης.

--------------------------------------------------------------------------------------

--Query για ένωση των πινάκων EMPLOYEE και FINANCIAL_SUMMARY ώστε να είναι συγκεντρωμένα βασικά στοιχεία του εργαζομένου όπως το ονοματεπώνυμό του και οι μικτές αποδοχές του.
SELECT employee.AFM, employee.Name, employee.Surname, financial_summary.Financial_Year, financial_summary.Miktes_Apodoxes_Etous FROM EMPLOYEE JOIN FINANCIAL_SUMMARY ON employee.AFM = financial_summary.AFM
--Μία εφαρμογή της SELECT για να τραβήξουμε τις στήλες που θέλουμε και όχι όλες απαραίτητα. 
--Χρησιμοποιούμε το JOIN για να φτιάξουμε ένα προσορινό πίνακα με τα στοιχεία που επιλέξαμε.

---------------------------------------------------------------------------------------

--Query όμοιο με το προηγούμενο ως προς τη δομή.
SELECT recruitment.Code_Pos, recruitment.Date_Pub, MME.Code_MME, MME.Name, MME.MME_Type FROM RECRUITMENT JOIN MME ON recruitment.Code_MME = MME.Code_MME			
--Είναι ένας συγκεντρωτικός πίνακας για τις προκυρήξεις που έγιναν για συγκεκριμένες θέσεις εργασίας βλέποντας παράλληλα και λεπτομέριες για το μέσο στο οποίο έγινε η προκύρηξη.

------------------------------------------------------------------------------------------

--Query που δημιουργεί έναν προσορινό πίνακα όπου βλέπουμε την καλύτερη αξιολόγηση για κάθε εργαζόμενο.
SELECT employee.AFM, employee.Name, employee.Surname, evaluation.Date_Done, max(evaluation.Score) AS 'Max Evaluation' FROM EMPLOYEE JOIN EVALUATION ON employee.AFM = evaluation.AFM GROUP BY AFM
--Ο πίνακας είναι προϊόν μίας JOIN της οντότητας EMPLOYEE και της EVALUATION, ενώ χρησιμοποιούμε το MAX για να πάρουμε την καλύτερη από τις αξιολογήσεις του κάθε εργαζομένου.

-------------------------------------------------------------------------------------------
			
--Query που απομονώνει τις θέσεις που καλύπτονται από ένα συγκεκριμένο ταμείο παροχών(εδώ το δοκιμαστικό tameio1).
SELECT Code_Pos, Department FROM POSITION WHERE Code_Prov IN (SELECT Code_Prov FROM PROVIDENCE WHERE Tameio_Prov = 'tameio1')			
--Πρόκειται για ένα nested query που εμφανίζει στοιχεία από την οντότητα POSITION αλλά με κριτήριο την τιμή κάποιου πεδίου σε άλλο πίνακα.

-----------------------------------------------------------------------------------------------

--Query για την ταξινόμηση ενός πίνακα που παρουσιάζουμε. 
SELECT * FROM PAYMENT ORDER BY Day_Pay
--Απλή εφαρμογή της ORDER BY.

-----------------------------------------------------------------------------------------------

--Query για την ομαδοποίηση δεδομένων. Χωρίζουμε τους εργαζομένους ανάλογα με τον αριθμό τέκνων, εφόσον αυτοί έχουν παιδιά.
SELECT Name, Surname, Children_No, count(Children_No) as 'Total' FROM EMPLOYEE GROUP BY Children_No HAVING Children_No>0 ORDER BY Children_No
--Με χρήση της COUNT μετράμε πόσες φορές εμφανίζεται ο κάθε αριθμός τέκνων και φτιάχνουμε τον ομαδοποιημένο πίνακα. 
--Χρησιμοποιούμε το HAVING για να εξαιρέσουμε αυτούς που δεν έχουν καθόλου παιδιά.

-----------------------------------------------------------------------------------------------
			
--Query που δημιουργεί το VIEW EMPPOS, το οποίο είναι μία μόνιμη ένωση των πινάκων EMPLOYEE και POSITION.
--Έτσι μπορούμε να έχουμε μία πιο ξεκάθαρη όψη για το τμήμα που εργάζεται ο κάθε εργαζόμενος.	
CREATE VIEW EMPPOS AS SELECT A.AFM,A.Name,A.Surname,A.
Code_Pos,B.Department,B.Code_Pay,B.Code_Prov FROM EMPLOYEE A,
POSITION B WHERE A.Code_Pos = B.Code_Pos

--Με την SELECT επιλέγουμε όλες τις γραμμές του πίνακα.
SELECT * FROM EMPPOS

--Η UPDATE αυτή επιτρέπει στο χρήστη να τροποποιήσει τα στοιχεία που βλέπει μπροστά του και να ενημερώσει αυτόματα και τους αρχικούς πίνακες.
UPDATE
			EMPLOYEE
		SET
			Name='$_POST[Name]',
			Surname='$_POST[Surname]'
		WHERE
			AFM='$_POST[AFM]'
UPDATE
			POSITION
		SET
			Department='$_POST[Department]'
		WHERE
			Code_Pos='$_POST[Code_Pos]'

--Αντίστοιχα μπορεί να διαγράψει στοιχεία από τις οντότητες μέσω του VIEW			
DELETE FROM EMPLOYEE WHERE AFM = '$_POST[AFM]'
DELETE FROM POSITION WHERE Code_Pos = '$_POST[Code_Pos]'

--Τέλος, έχουμε μία ακόμα βολική ομαδοποίηση όπου ο χρήστης μπορεί να δει τον αριθμό εργαζομένων ανά θέση.
SELECT Code_Pos, Department, count(Code_Pos) as 'Total' FROM EMPPOS GROUP BY Code_Pos



--------------ΤΕΛΟΣ QUERIES.sql--------------------