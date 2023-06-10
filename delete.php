<?php
    include 'database.php';

    $id = $_GET['id'];

    $query = "DELETE FROM lists WHERE list_id = '$id'";

    
    $result = mysqli_query($connect, $query);

    header('location: index.php');
?>
