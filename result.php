<?php

$database = new mysqli('localhost:3306', 'root', '', 'gemasas');
$query = "select * from usuarios";
$result = mysqli_query($database, $query);

$active = [];
$inactive = [];
$wait = [];


while ($row = mysqli_fetch_array($result)) {
  switch($row[3]) {
    case '1':
      array_push($active, $row);
      break;
    case '2':
      array_push($inactive, $row);
      break;
    case '3':
      array_push($wait, $row);
      break;
  }
}

require('result.view.php');