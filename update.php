<?php
    include 'database.php';


    if(isset($_POST['update'])){
        
        $id = 1;

        foreach($_POST as $name){

            $query = "UPDATE lists SET list_name='$name' WHERE list_id='$id'";

            $result = mysqli_query($connect, $query);

            $id++;
        }


        header('location: index.php');
    }else{
        header('location: index.php');

    }


    // $count=1;

    // foreach($_POST as $row){

    //     if(!$_POST['update']){
    //         echo $count++;
    //         echo $row.'<br>';

    //     }
    // }






?>


