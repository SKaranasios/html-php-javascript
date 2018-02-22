<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email =$_POST['email'];
$sql= "SELECT email,firstname,lastname,Ar,Re,adults,kids,Singleroom,Doubleroom,Tripleroom,Quadraroom  FROM booking1 WHERE (email='".$_POST['email']."' )";
// echo $sql;
 $result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES3.css'><meta charset='utf-8'></head>";
		  echo "<table >";
        echo "<h4><p>Oνομα: " . $row["firstname"]. "<br> Επιθετο: " . $row["lastname"]. "<br> email: " . $row["email"]."<br> Απο: " . $row["Ar"]. "<br>Εως: " . $row["Re"]. "<br>Ενηλικες: " . $row["adults"]. "<br>Παιδια: " . $row["kids"]."<br>Μονοκλινο: " . $row["Singleroom"]."<br>Δικλινο: " . $row["Doubleroom"]."<br>Τρικλινο: " . $row["Tripleroom"]. "<br>Tετρακλινο:" . $row["Quadraroom"]. "</p></h4><hr><br><br><br> ";
     echo "<table></body></html>";
	}
} else {
	echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES3.css'></head>";
    echo "<h2>Δεν εχετε κανει καμια κρατηση με αυτο το email</h2> <br> <a href='loginpage.html' > Eπιστρεψτε στην αναζητηση κρατησεων </a>";
	echo "</body></html>";
}
$conn->close();
?>

