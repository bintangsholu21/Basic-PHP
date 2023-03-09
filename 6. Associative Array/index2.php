<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Daftar Buku</h1>
<?php

$books= [
[
'name' => 'Do Androids Dream of Electric Sheep',
'author' => 'Philips K. Dick',
'purchaseUrl' => 'http://example.com'
],
[
'name' => 'Project Hail Mary',
'author' => 'Andy Weir',
'purchaseUrl' => 'http://example.com'
]
];
?>
<?php foreach ($books as $book) : ?>
    <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?>
        </a>
    </li>
<?php endforeach ?>
</body>
</html>
