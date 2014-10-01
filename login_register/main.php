<?php
$titlePage='Application name';
include 'header.php';
?>
<?php 
if(!$_SESSION['Loggedin']){
    $url="Location:index.php";
    header($url);
    exit;
}
$name = $_SESSION['name'];
?>
<h1>Welcome,<?php echo ' '.$name;?></h1>
<form method="POST" action="logout.php">
    <input type="submit" value="Logout" name="logout"/>
</form>



<?php 
include 'footer.php';
?>



