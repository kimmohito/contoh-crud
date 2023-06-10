<?php
    include 'database.php';

    $input = $_POST['input'];


    $query = "INSERT INTO lists (list_name) VALUES ('$input')";
    
    $result = mysqli_query($connect, $query);

    header('location: index.php');


?>