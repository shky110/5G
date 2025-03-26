<?php
include("../config/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "UPDATE deposits SET status='approved' WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: admin.php");
}
?>
