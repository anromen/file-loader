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
    <h2 class="center">Formulario de carga de información</h2>
    <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="file" id="file" value="...test">
      <span class="error"><?php echo $error ?></span>
      <input type="submit" name="submit" id="submit">
    </form>
  </div>
</body> 
</html>