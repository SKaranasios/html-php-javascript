<?php include 'connect_to_database1.php'; ?> 
<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
   
	  

if($username !='' and $username !=null and $password !='' and $password !=null ) {
	 mysqli_query($connect ,"INSERT INTO login(EMAIL,password)
	VALUES ('$username','$password')");
	 echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES1.css'></head>";
echo "<p>Η εγγραφη ολοκληρωθηκε</p>";
	echo "<a href=\"loginpage.html\" class='button'>Πηγαινετε στη σελιδα συνδεσης</a>";
	  echo "</body></html>";
}
else {
     echo "Η εγγραφη ΔΕΝ εγινε διοτι ενα απο τα πεδια κωδικος,ονομα χρηστη ειναι κενο<br />";
	echo mysqli_error ($connect);
}
?>