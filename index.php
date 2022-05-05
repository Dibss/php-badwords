<?php

$paragraph = "Lorem ipsum dolor sit amet parola consectetur adipisicing elit. Laboriosam parola corporis at cum perferendis voluptatibus officiis tempora sapiente parola odio, minima debitis vel voluptas earum consequatur. Officia mollitia consequuntur eos dicta at!";

$parolaCensurata = (isset($_GET['censura'])) ? $_GET['censura'] : '';

$paragrafoCensurato = str_replace($parolaCensurata, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <p><?php echo $paragraph; ?></p>
  <div>La lunghezza di questo lorem ipsum è: <?php echo strlen($paragraph) ?></div>

  <br>

  <form method="GET">
    <input type="text" name="censura">
    <button type="submit">Invia</button>
  </form>

  <br>

  <h4>Inserire 'parola' nel form</h4>
  <p><?php echo $paragrafoCensurato ?></p>
  <div>La lunghezza di questo lorem ipsum è: <?php echo strlen($paragrafoCensurato) ?></div>

</body>
</html>