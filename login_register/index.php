<?php 
$titlePage='Register';
include 'header.php';

?> 
<h1>Register HERE ! </h1>
<form method="POST" id="reg_form">
    <div class="inputs">
        <input type="text" name="uname" placeholder="Username" size="20"/>   
        <input type="password" name="pword" placeholder="Password" size="20"/>
        <input type="email" name="email" placeholder="Email" />
        <input type="submit" value="Register" /><br />
    </div>
    <a href="Login.php"><h4>Already have account ?--> Log IN HERE</h4></a>
</form>


<?php

if(!$connection){
    echo'failed';
    exit;
}

$q=  mysqli_query($connection,'SELECT * FROM users');
if(!$q){
    echo 'error';
}

if($_POST){
    
    $userName=  trim($_POST['uname']);
    $userPass=trim($_POST['pword']);
    $userEmail=trim($_POST['email']);
    
    $error[];
   if((strlen($userEmail)<4 )){
       $error="too short Email";      
    }
  
   else if((strlen($userName)<4 )){
        $error= "Too short name";     
    }
    
   else   if((strlen($userPass)<4 )){
        $error = "Password should be more than 4 symbols";       
    }
    
    $sql='INSERT INTO users (username,password,Email) VALUES("'.$userName.'","'.$userPass.'","'.$userEmail.'")';
    
    
    if(mysqli_query($connection,$sql)){
        echo 'Registered';
    }else {
        echo'error';
    }
}

?>

<?php 
include'footer.php';
?>



