<?php

session_start();

 $_SESSION['firstnameerror']=$_SESSION['lastnameerror']=$_SESSION['emailerror']=$_SESSION['passworderror']=$_SESSION['confirmpassworderror']=
 $_SESSION['checkbox']="";

function testfun() {
   
   
if(isset($_POST['fname']) || ($_POST['lname']) ||($_POST['email']) || ($_POST['password']) || ($_POST['cpassword'])){ 
   
   
     
   $fname    =$_POST['fname'];
   $lname    =$_POST['lname'];
   $email    =$_POST['email'];
   $password =$_POST['password'];                          
   $cpassword=$_POST['cpassword'];
 
   

     
   if(( preg_match('/\\d/', $fname))){   //validation first name
      
       $_SESSION['firstnameerror']=$firstnameerror="* Numbers Are Not Valid In This Feild";
      
      
       }elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $fname)){
      
   
       $_SESSION['firstnameerror']=$firstnameerror="* Special Characters Are Not Valid In This Feild";
      
   }
   
   elseif(empty($fname)){
      
    
       $_SESSION['firstnameerror']=$firstnameerror="* First Name Is Required Feild ";
   }
   
   
   
   if(( preg_match('/\\d/', $lname))){  //validation last name
      
    
      $_SESSION['lastnameerror']=$lastnameerror="* Numbers Are Not Valid In This Feild ";
       
       
   }elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lname)){
      
  
      $_SESSION['lastnameerror']=$lastnameerror="* Special Characters Are Not Valid In This Feild";
      
   } elseif(empty($lname)){
      
   
      $_SESSION['lastnameerror']=$lastnameerror="* Last Name Is Required Feild";
      
   }
   
   if(empty($_POST['email'])){//email validation
      
    
      $_SESSION['emailerror']=$emailerror="* Email Is Required Feild";
      
   }
    elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
      
   
      $_SESSION['emailerror']=$emailerror="* Not Vaild Email";
      
   }
   if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)){ //password validation
      
     
      $_SESSION['passworderror']=$passworderror="* Special Characters Are Not Valid In This Feild";
      
      
  }elseif(empty($password)){
      
      $_SESSION['passworderror']=$passworderror="* Password Is Required Field";

 }elseif(strlen($password)<7){
      
        
     $_SESSION['passworderror']=$passworderror="* Password Must Be More Than 6 Characters";

   }
  
   
  if(empty($cpassword)){ //confirm password validation
      
    
       $_SESSION['confirmpassworderror']=$confirmpassworderror="* Confirm Password Is Required Feild";
      
      
   }elseif(strcmp($password,$cpassword)){//confirm password validation
      
      
        $_SESSION['confirmpassworderror']=$confirmpassworderror="* Enter The Same Password Again";
      
   }
   
   if(isset($_POST['test'])!= 'value'){//checkbox validation 
      
     
        $_SESSION['checkbox']=$checkbox="* Must Agree The Terms And Conditions";
   }
   
   
          elseif($_SESSION['firstnameerror']=="" and $_SESSION['lastnameerror']==""and $_SESSION['emailerror']==""and $_SESSION['passworderror']==""
                 
          and $_SESSION['confirmpassworderror']==""and $_SESSION['checkbox']==""){
   
          $_SESSION['fname']=$fname;
        
          $_SESSION['lname']=$lname;
     
          header("location:home.php");


}  
   
}

}




if(isset($_POST['signupbutton'])){
  
 
   testfun();
   
   
   
   
}
