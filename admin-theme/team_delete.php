<?php
include 'db_conn.php';
$sql = "DELETE FROM admins WHERE Email='" . $_GET["adminemail"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:team.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>