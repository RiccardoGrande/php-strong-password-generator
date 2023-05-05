<?php

$password = isset($_GET['password']);

if (isset($_GET["password"])) {
    $caratteri = '0123456789101112131415phguvuvjdjcbiudiajcbaiycaijcasicasijcn';

    for ($i = 0; $i < $password; $i++) {
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    echo "<p>La password generata è: <strong>$password</strong></p>";
}
