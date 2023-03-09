# CONDITION AND BOOLEAN

## Conditional
#### Conditional pada PHP digunakan untuk mengatur alur program berdasarkan kondisi tertentu. Dengan menggunakan conditional, kita dapat membuat program yang mampu melakukan tindakan berbeda tergantung pada nilai atau kondisi tertentu.


## Boolean
#### Boolean pada PHP adalah tipe data yang hanya memiliki dua nilai, yaitu true (benar) dan false (salah). Tipe data boolean digunakan dalam operasi logika, yang sering digunakan dalam struktur kontrol seperti conditional dan loop.

Contoh conditional dan Boolean pada PHP :
```
<?php
    $name = "Dark Matter";
    $read = true;

    //Operasi if-else
    if ($read) {
        $message = "You have read $name"; // Mengembalikan nilai true
    } else {
        $message = "You have NOT read $name"; // Mengembalikan nilai false
    }
```

Contoh pemanggilan pada HTML :
```
    // Print variabel $message ke web browser di dalam tag html
    // Menggunakan <?php echo $message ?> 
    
    <body>
        <h1><?= $message ?></h1>
    </body>
    
    //output : You have read Dark Matter
```
output :<br>
<img src="condition.png" alt="img" style="zoom:50%;" />



