<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("connection failed");
} else {
    $action = $_POST['action'] ?? '';
    if (!$action) {
        header("Location:index.php");
        die();
    } else {
        $location = $_POST['location'];
        $plevel = $_POST['plevel'];
        $qindex = $_POST['qindex'];
        $pollutant = $_POST['pollutant'];
        if ($location && $plevel && $qindex && $pollutant) {
            $query = "INSERT INTO airinfo(location,plevel,qindex,pollutant) VALUES ('{$location}','{$plevel}','{$qindex}','{$pollutant}')";
            $result = mysqli_query($connection, $query);
            header('location:showInfo.php');
        }
    }
}
