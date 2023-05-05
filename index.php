<?php

$password = isset($_GET['password']);

if (isset($_GET["password"])) {
    $caratteri = '0123456789101112131415phguvuvjdjcbiudiajcbaiycaijcasicasijcn';

    for ($i = 0; $i < $password; $i++) {
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    echo "<p>La password generata è: <strong>$password</strong></p>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Document</title>
</head>
<body>

<div class="container m-auto ">
    <div class="row">
        <div class="col text-center p-2">
            <h1 class="p-1">Strong password generator</h1>
            <h3 class="p-1">Genera una password sicura!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
          <form method="get">
            <!-- <input type="password" name="password" id="password"> -->
            <input type="number" name="password" id="password" min="6" max="20" required>
            <button type="submit">Send</button>
          </form>
        </div>
        <div class="col"></div>
    </div>

</body>
</html>
