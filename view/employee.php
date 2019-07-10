<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>employee</title>
        <?php
        include_once '../includes/links.php';
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
       
      <?php include_once '../includes/employee1.php'; ?>
    </body>
