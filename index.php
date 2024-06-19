<?php
// GET NUMBER OF CHAR IN PASSWORD
$charNum = intval($_GET['charNum']);

// DEFINE ARRAYS OF CHARS
$upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowerCase = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

$total_characters = $upperCase . $lowerCase . $numbers . $symbols;

function genPassword($pswLen, $totChar)
{
    $password = '';

    for ($i = 0; $i < $pswLen; $i++) {
        $random_index = rand(0, strlen($totChar) - 1);
        $password .= $totChar[$random_index];
    }

    return $password;
}

$password = genPassword($charNum, $total_characters);

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
        <div class="row">
            <div class="col-6">
                <form action="index.php" method="GET">
                    <label for="charNum">Numero di caratteri : </label>
                    <input type="number" name="charNum">
                    <button class="btn btn-primary">Genera</button>
                </form>
            </div>
            <div class="col-6 text-center">
                <h2>Password Generata :</h2>
                <h3><?php echo $password ?></h3>
            </div>
        </div>

    </div>
</body>

</html>