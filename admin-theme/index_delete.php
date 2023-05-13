<?php
include 'db_conn.php';
$sql = "DELETE FROM tb_login WHERE EMail='" . $_GET["useremail"] . "'";
if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>