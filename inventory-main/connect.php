<?php
// Create connection
$serverName = "localhost";
$userName = "root";
$password = "";
// Create connection
$conn = mysqli_connect($serverName, $userName, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

        $sql = "CREATE DATABASE INVENTORYDB";
        mysqli_query($conn, $sql);
        if (mysqli_error($conn) == "Can't create database 'INVENTORYDB'; database exists"){
          echo "";
        }
        else{
              echo "error creating database!";
        }

$serverName = "localhost";
$userName = "root";
$password = "";
$database="INVENTORYDB";