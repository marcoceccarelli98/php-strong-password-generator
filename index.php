<?php
session_start();

include_once __DIR__ . '/functions.php';

// GET NUMBER OF CHAR IN PASSWORD
$charNum = isset($_GET['charNum']) ? intval($_GET['charNum']) : 0;
$incLetters = isset($_GET['letters']);
$incNumbers = isset($_GET['numbers']);
$incSymbols = isset($_GET['symbols']);

$password = genPassword($charNum, $incLetters, $incNumbers, $incSymbols);

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
            <form class="text-center" action="index.php" method="GET">
                <div class="mb-3">
                    <label for="charNum">Numero di caratteri : </label>
                    <input type="number" name="charNum">
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="mx-3">
                        <label class="d-block" for="letters">Letters</label>
                        <input type="checkbox" name="letters">
                    </div>
                    <div class="mx-3">
                        <label class="d-block" for="numbers">Numbers</label>
                        <input type="checkbox" name="numbers">
                    </div>
                    <div class="mx-3">
                        <label class="d-block" for="symbols">Symbols</label>
                        <input type="checkbox" name="symbols">
                    </div>
                </div>
                <button class="btn btn-primary">Genera</button>
            </form>
        </div>
    </div>
</body>

</html>