<?php 
session_start(); 

function getCon() {
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    $db_name = "qlwebdulich";
    $conn = new mysqli($sname, $unmae, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeCon($conn) {
    $conn->close();
}


function getAdmins() {
    $admins = array();
    $conn = getCon();
   
    $sql = "SELECT * FROM admins";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($admins,$row);
        }
    }

    closeCon($conn);
    return $admins;
}

function getUser() {
    $users = array();
    $conn = getCon();
   
    $sql = "SELECT * FROM tb_login";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($users,$row);
        }
    }

    closeCon($conn);
    return $users;
}

function deleteAdmin($email){
    $conn = getCon();


    $sql = "DELETE FROM admins WHERE `admins`.`Email` = $email";
    $conn->query($sql);
    closeCon($conn);
}


?>