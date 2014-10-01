<?php 
session_start();
$connection =  mysqli_connect('localhost','keksa','root','test-project');

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <link href="main.css" rel="stylesheet" type="text/css"  >
        <title><?php echo $titlePage ?></title>
    </head>
    <body>