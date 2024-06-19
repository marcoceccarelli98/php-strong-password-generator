<?php
session_start();

var_dump($_SESSION['password']);
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
        <h1 class="text-center mb-5">Password Generata :</h1>
        <h3><?php echo $_SESSION['password'] ?></h3>
    </div>
</body>

</html>