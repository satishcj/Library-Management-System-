<?php  
require'../include/connection1.php';  
$libid=$_POST['libid'];  
$bookid=$_POST['bookid'];  
 $result = mysqli_query($connection,"SELECT * FROM issuebooks where libid= '$libid' &&  bookid='$bookid'");  
     $rowcount=mysqli_num_rows($result);  
     if($rowcount>0)  
     {  
     $sql=mysqli_query($connection,"UPDATE studentlogin SET  numbooks=numbooks-1  WHERE logid='$libid'");  
         
     $sql1=mysqli_query($connection,"UPDATE book SET  numberofbooks=numberofbooks+1  WHERE code='$bookid'");  
       
     $sql2=mysqli_query($connection,"DELETE FROM issuebooks WHERE  libid=$libid && bookid='$bookid'");  
      }  
         else  
     echo"no book  issued";  
        mysqli_close($connection);  
  ?>  