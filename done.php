<?php
    include 'database.php';

    $id = $_GET['id'];

    $query = "UPDATE lists SET list_status='done' WHERE list_id = '$id'";
    
    $result = mysqli_query($connect, $query);

    header('location: index.php');
?>
