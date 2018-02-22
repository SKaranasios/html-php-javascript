<?php include 'database.php'; ?> 
<?php

    $firstname =$_POST['firstname'];
	$lastname	=$_POST['lastname'];
    $email =$_POST['email'];
    $Ar =$_POST['Ar'];
	$Re =$_POST['Re'];
	$adults =$_POST['adults'];
	$kids= $_POST['kids'];
	$type1= $_POST['type1'];
	$type2= $_POST['type2'];
	$type3= $_POST['type3'];
	$type4= $_POST['type4'];
	  

if($email !='' and $email !=null and $Ar !='' and $Ar !=null and  $Re !='' and $Re !=null and $adults !='' and $adults !=null ) {
	 mysqli_query($connect,"INSERT INTO booking1(firstname,lastname,email,Ar,Re,adults,kids,Singleroom,Doubleroom,Tripleroom,Quadraroom)
	VALUES ('$firstname','$lastname','$email','$Ar','$Re','$adults','$kids','$type1','$type2','$type3','$type4')");
	 echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES2.css'></head>";
echo "<p>Η κρατηση αποθηκευτηκε</p>";
	echo "<a href=\"bookingform.html\">Επιστρεψτε πισω</a>";
	    echo "</body></html>";
}
else {
     echo "Η κρατηση ΔΕΝ εγινε διοτι ενα απο τα πεδια email,αναχωρηση ,αφιξη,ενηλικες ειναι κενο<br />";
	echo mysqli_error ($connect);
}