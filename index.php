<?php
    include 'database.php';
?>


<div style="
    background: #FFFF88;
    padding: 20px;
    border-radius: 10px;
    margin: auto;
    max-width: 400px;
"> 
    <h1>To Do List</h1>

    <?php
        $query = "SELECT * FROM lists ORDER BY list_status ASC";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($result)){

            if($row['list_status']=='done'){

                echo '
                    <div>
                        <span style="
                            
                        ">
                            <a style="text-decoration: none;" href="undone.php?id='.$row['list_id'].'">✔️</a>
                        </span>
                        <span>
                            '.$row['list_name'].'
                        </span>
                        <span style="
                            
                        ">
                            <a style="text-decoration: none;" href="delete.php?id='.$row['list_id'].'">---</a>
                        </span>
                    </div>
                ';
            }else{

                echo '
                    <div>
                        <span style="
                            
                        ">
                            <a style="text-decoration: none;" href="done.php?id='.$row['list_id'].'">❌</a>
                        </span>
                        <span>
                            '.$row['list_name'].'
                        </span>
                    </div>
                ';

            }

        }
    ?>

    <style>
        form{
            margin: 0;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        form input{
            background: ccc;
            border: none;
            padding: 10px;
            width: 80%;
        }
        form button{
            
            width: 20%;
            border: none;
            padding: 9px;
        }

    </style>

    <form action="add.php" method="post">
        <input type="text" name="input" required/><button type="submit">➕</button>
    </form>

</div>




<a href="edit.php">Edit</a>


