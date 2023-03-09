<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function dan Filtering</title>
</head>
<body>
<?php
$books=[
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philips K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];
?>
<h1>Daftar Buku dengan Author Andy Weir</h1>
<?php foreach ($books as $book) : ?>
    <?php if($book['author'] === 'Andy Weir') :?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> ( <?= $book['releaseYear'] ?> ) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endif; ?>
<?php endforeach ?>
</body>
</html>
