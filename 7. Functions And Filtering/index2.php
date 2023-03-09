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

<?php
function filterByAuthor($books, $author){
    $filteredBooks = [];
    foreach ($books as $book){
        if($book['author'] === $author){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}
?>
<h1>Daftar Buku Author Andy Weir</h1>
<?php foreach (filterByAuthor($books, 'Philips K. Dick') as $book) : ?>
    <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> ( <?= $book['releaseYear'] ?> ) - By <?= $book['author'] ?>
        </a>
    </li>
<?php endforeach ?>
</body>
</html>
