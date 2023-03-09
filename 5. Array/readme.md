# ARRAY
#### Array pada PHP adalah tipe data yang digunakan untuk menyimpan sekumpulan nilai dalam satu variabel. Nilai-nilai tersebut dapat berupa tipe data apapun, seperti string, integer, float, boolean, dan sebagainya. 

contoh array pada PHP

```
<?php
$books = [
  "Do Androids Dream of Electric Sheep",
  "The Langoliers",
  "Hail Mary"
];
```

untuk memanggil array tersebut, kita dapat menggunakan perulangan seperti *for, foreach, while, do-while*.

```
<ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
```

output :<br>
<img src="img.png" alt="img" style="zoom:50%;" />

