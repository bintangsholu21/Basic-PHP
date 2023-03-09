<?php
    $name = "Dark Matter";
    $read = true;
    if ($read) {
        $message = "You have read $name"; // Mengembalikan nilai true
    } else {
        $message = "You have NOT read $name"; // Mengembalikan nilai false
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition</title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>
