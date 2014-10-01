<?php
$titlePage='Login';
include'header.php';
?>
<h1>Sign in !</h1>
<form method="POST" id="reg_form">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" value="Sign IN" /> <br />
    <a href="index.php">Don't have account?--> Click HERE to Register</a>
</form>

<?php 
  if($_POST){
      $userName = $connection->real_escape_string(trim($_POST['username']));
      $userPass = $connection->real_escape_string(trim($_POST['password']));
      
      $query ='SELECT * FROM users WHERE username="'.$userName.'" AND password="'.$userPass.'"';      
      $q = mysqli_query($connection, $query);
     $count =  mysqli_num_rows($q);
     if($count ==1){
         $_SESSION['Loggedin']= 'YES';
         $_SESSION['name'] ="".$userName."";
         header("Location:main.php");
         exit;
     }else {
         echo"Invalid Login";
     }
      
      
      
  }
?>

<?php 
include'footer.php';
?>


