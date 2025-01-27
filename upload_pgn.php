<?php

require_once "db_con.php";

if (isset($_POST)){
    $id = $_POST['id'];
    $pgn = $_POST['pgn']; 
    $sql = "INSERT INTO `games` ('id', 'pgn') VALUES ('$id', '$pgn')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>alert('PGN Uploaded Successfuly!')</script>";
        header("Location: index.html");
    }
}
    
?>