<?php
    include 'database.php';
?>

<h1>List</h1>

<form action="update.php" method="post">
<?php
    $query = "SELECT * FROM lists";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)){
        echo '<input type="text" value="'.$row['list_name'].'" name="'.$row['list_id'].'"><br>';
    }
?>
    <button type="cancel" name="cancel">Cancel</button>
    <button type="submit" name="update">Update</button>

</form>

