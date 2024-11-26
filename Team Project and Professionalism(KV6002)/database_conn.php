<?php
// database connection using PDO to retrieve relavent data to display to the user

// Turn on PHP error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getConnection() {
  try {
      $connection = new PDO("mysql:host=nuwebspace_db:3306; dbname=w21006990", "w21006990", "Dannyt101918");
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connection;
  } catch (Exception $e) {
      throw new Exception("Connection error ". $e->getMessage(), 0, $e);
  }
}
?>
