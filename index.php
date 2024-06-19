<?php
session_start();

include_once __DIR__ . '/functions.php';

// GET NUMBER OF CHAR IN PASSWORD
$charNum = isset($_GET['charNum']) ? intval($_GET['charNum']) : 0;

$password = genPassword($charNum);

$_SESSION['password'] = $password;

if (!empty($_SESSION['password'])) {
    header('Location: ./password.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body class="vh-100 d-flex">
    <div class="col-10 m-auto">
        <h1 class="text-center mb-5">Password Generator</h1>
        <div class="m-auto">
            <form action="index.php" method="GET">
                <label for="charNum">Numero di caratteri : </label>
                <input type="number" name="charNum">
                <button class="btn btn-primary">Genera</button>
            </form>
        </div>
    </div>
</body>

</html>