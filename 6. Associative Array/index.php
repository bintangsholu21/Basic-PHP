
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Array</title>
</head>
<body>
    <?php
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
    ?>
    <h1>Daftar Buku</h1>
    <?php // untuk menampilkan semua array?>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach ?>


   <?php // untuk menampilkan array spesifik?>
    <h1>Daftar Buku</h1>
    <li><?= $books[0] ?></li>


</body>
</html>

