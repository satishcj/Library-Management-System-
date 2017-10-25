
<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'practice'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function NewUser() 
{  
$userName = $_POST['username']; 
$userid = $_POST['userid']; 
$email = $_POST['email']; 
$age = $_POST['age']; 
$gender = $_POST['gender']; 
$address = $_POST['address']; 
$phonenumber = $_POST['phonenumber']; 
$password = $_POST['password']; 
$query = "INSERT INTO USER_Reg(username,userid,email,age,gender,address,phonenumber,password) VALUES ('$userName','$userid','$email','$age','$gender','$address','$phonenumber','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) { 
echo "YOUR REGISTRATION IS COMPLETED..."; 
} 
} 
function SignUp() 
{ if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
 { $query = mysql_query("SELECT * FROM USER_Reg WHERE userName = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error()); 
if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
{ newuser(); 
} 
else 
{ 
echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
} 
} 
} 
if(isset($_POST['submit'])) 
{ 
SignUp(); 
} 
?>

