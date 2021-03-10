
<?php

if(isset($_GET['id'])){
    require('connect.php');
    $id = trim($_GET['id']);
    $id = mysqli_real_escape_string($conn, $id);
    //$query = "DELETE FROM watches WHERE id = '{$id}'"; // delete query
    $query = "UPDATE watches SET deleted=1 WHERE id = '{$id}'"; // soft delete query
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ".$_SERVER['HTTP_REFERER']);
}
    


?>