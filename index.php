<?php

include ('validation.php');


?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>login</title>
            <link rel="icon" type="image/x-icon" href="images/key-2824086_960_720.jpg" />
            <link rel="stylesheet" href="layout/style.css">
        </head>
        
        <body>
            
                <div class="signup" >
                
                <img class="img" name="img" src="images/key.jpg">
            
                <form class="sign"  autocomplete="on" method="post"  action="index.php">
                
                <p class="p">sign up form</p>
                
                
                <span class="errormsg"><?php echo $_SESSION['firstnameerror'] ;?></span>
                  
                <input type="text" placeholder=" First Name   (Required)" id="form" class="fname" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];} ?>">   
             
                <br>
                <br>
                
                <span class="errormsg"><?php echo $_SESSION['lastnameerror'] ;?></span>
                
                <input type="text" placeholder=" Last Name  (Required)" id="form" class="lname" name="lname" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];} ?>">
                
                <br>
                <br>
                
                 <span class="errormsg"><?php echo $_SESSION['emailerror'] ;?></span>
                 
                 <input type="email" placeholder=" Email  (Required)" id="form" autocomplete="on" class="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" >
               
               <br>
               <br>
 
               <span class="errormsg"><?php echo $_SESSION['passworderror'] ;?></span>
               
               <input type="password" placeholder=" Password  (Required)" id="form" class="password" name="password" " value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
               
                <br>
                <br>
 
               <span class="errormsg"><?php echo $_SESSION['confirmpassworderror'] ;?></span>
               
               <input type="password" placeholder=" Confirm Password  (Required)"  id="form" class="cpassword"  name="cpassword" value="<?php if(isset($_POST['cpassword'])){echo $_POST['cpassword'];} ?>">
               
               <br>
               <br>
                
                
                   
                <tr>
                    
                <td width="50%" alighn="right"><input type=checkbox name="test" value="value" checked=on></td>
                
                <td width="50%" alighn="left"> I agree with terms and conditions</td>
                
                <span class="errormsg"><?php echo $_SESSION['checkbox'] ;?></span>
                
                </tr>
               
               <br>
               <br>
 
               
               <input type="submit" value="GO" name="signupbutton" id="signupbutton" class="signupbutton">
               
               
               
                
                
                
            </form>
            
            </div>
            
        </body>
        
     
    </html>

