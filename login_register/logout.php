<?php
include 'header.php';
?>
<?php
session_destroy();
header("Location:Login.php");
include 'footer.php';
?>