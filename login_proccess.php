

<?php 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase1";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");
//oi metablhtes mou
 
if (isset($_POST["email"]))
{
  $email = $_POST["email"];
  //echo $email;
  //echo " is your username";
} 
else 
{
  $email = null;
 // echo "no username supplied";
}
 
if (isset($_POST["pass"]))
{
  $pass = $_POST["pass"];
 // echo $pass;
 // echo " is your password";
} 
else 
{
  $pass = null;
 // echo "no password supplied";
}
 //echo $email;
 
 $sql= "SELECT EMAIL , password FROM login WHERE (EMAIL='".$_POST['email']."' && password='".$_POST['pass']."')";
// echo $sql;
 $result = mysqli_query($conn, $sql);
 
 if (mysqli_num_rows($result) > 0) {
    echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES.css'></head>";
    echo "<div >";
    echo "<form method='post' action='gettable.php' name='forma' id='forma'>";
    echo "<label for='myemail'><h3>Για να βρειτε μια κρατηση που εχετε κανει εισαγεται το email σας και πατηστε<br><br><ins style='color:green;'> Aναζητηση της κρατησης σας</ins></h3> </label><input type='email' id='email' name='email' class='button' ><input type='submit' name='find' value='Αναζήτηση' class='button2' ><br> <br><a href='centralpage.html' class='button1' >Eπιστροφη στην αρχικη </a>";
    echo "</div></form></body></html>";
} else {
 echo "<html><body><head><link REL='STYLESHEET' TYPE='TEXT/CSS' HREF='STYLES.css'></head>";
 echo "<p style='border:5px solid grey;color:#0000aa;margin-right:800px;border-radius:15px;padding:10px;'>Δεν υπαρχει λογαριασμος με αυτα τα στοιχεια!Για την δημιουργια λογαριασμου πατηστε:</p> <a href='subscription0.html' class='button2' >ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ</a>";
 echo "</body></html>";
}
 
 
 
 
 
 
 
 
    $conn->close();
 
 
    
?>

