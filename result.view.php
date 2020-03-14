<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GEMA SAS</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>GEMA SAS</h1>
  </header>

  <div class="content">
    <a href="index.php">&lt&ltVolver</a>
    <h2 class="subtopic">Usuarios activos</h2>
    <table>
      <tr>
        <th>Email</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
      <?php foreach ($active as $row) { ?>
        <tr>
          <td><?php echo $row['correo'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['apellido'] ?></td>
        </tr>
      <?php } ?>

    </table>

    <h2 class="subtopic">Usuarios inactivos</h2>
    <table>
      <tr>
        <th>Email</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
      <?php foreach ($inactive as $row) { ?>
        <tr>
          <td><?php echo $row['correo'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['apellido'] ?></td>
        </tr>
      <?php } ?>
    </table>

    <h2 class="subtopic">Usuarios en espera</h2>
    <table>
      <tr>
        <th>Email</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
      <?php foreach ($wait as $row) { ?>
        <tr>
          <td><?php echo $row['correo'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['apellido'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>


</body>

</html>