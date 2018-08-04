<?php

session_start();

if(isset($_SERVER['HTTP_REFERER'])){
    
    
if(isset($_SESSION['fname'])){
        
        
        
        echo "Welcome ". $_SESSION['fname']." ". $_SESSION['lname']." to the Home page";
        
        echo "<br>";
        
        echo "<br>";
        
        echo "you have enterd all the reqirment feilds successfully";
        
        echo "<br>";
        
        echo "<br>";
        
         echo "If you want to return back to the signup form click '<a href=index.php>HERE</a>'";
         
         echo "<br>";
        
        echo "<br>";
        
       
        echo "NOTE: This Page Can Not Be Browsed Directly"; 
        
       

}
    
} else{
      
   
  echo "You Can Not Browse This Page Dirctly , Please Signup First";
    
  echo "<br>";
    
  echo "If you did not redirect automatically in 5 seconds to signup form please click '<a href=index.php>HERE</a>'";
    

  header("REFRESH:5;URL=index.php");
 
     


}



?>








