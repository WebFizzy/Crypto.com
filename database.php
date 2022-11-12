<?php
     //database connection
  $host = "localhost";
  $username = "root";
  $dbname = "phpmyadmin";
  $dbpassword = "";

  $mysqli = new mysqli(hostname: $host, username: $username, password: $dbpassword, database: $dbname);

  if ($mysqli->connect_errno) {
    die("connection error: " . $mysqli->connect_error);
  }
  return $mysqli;
