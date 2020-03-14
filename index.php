<?php 

$error = '';
$database = new mysqli('localhost:3306', 'root', '', 'gemasas');
$info = [];


if($_SERVER["REQUEST_METHOD"] === "POST") {
  if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
    $filename = $_FILES["file"]["tmp_name"];
    $file = fopen($filename, "r") or die("ERROR: no se pudo abrir el documento.");
    $data = fread($file, 2000);
    fclose($file);

    $info = explode(",", $data);

    for($i = 3; $i < count($info); $i += 3) {
      if (is_numeric(substr($info[$i], 0, 1))) {
        $info[$i] = substr($info[$i], 0, 1) . ',' . substr($info[$i], 1);
      } else {
        $error = "El código del usuario es obligatorio. Revise el archivo y pruebe nuevamente";
        break;
      }
    }

    if(!$error) {
      $info = array_chunk(explode(',', join(',', $info)), 4);

      foreach($info as $columns) {
        $sql = "insert into usuarios (correo, nombre, apellido, codigo) values ('" . join($columns, "','") . "')";
        
        mysqli_query($database, $sql);
      }

      header("Location: result.php");
    }
  }
}

require('index.view.php');

