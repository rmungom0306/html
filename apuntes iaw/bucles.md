# Bucles en PHP

## 1. Este código sirve para hacer un bucle de los primeros 10 números

```php
<?php
    // Imprimir los primeros 10 números
    for($i=1; $i<=10; $i++){
        echo $i." ";
    }

    // Con While
    $i=1;
    while($i<=10){
        echo $i." ";
        $i++;
    }
?>
```

## 2. Este sirve para los números pares solo

```php
<?php
    // Imprimir los números pares con FOR
    for($i=1; $i<=10; $i++){
        if($i % 2 == 0){
            echo $i." ";
        }
    }

    echo " ";

    // Imprimir los números pares con WHILE
    $i=1;
    while($i<=10){
        if($i % 2 == 0){
            echo $i." ";
        }
        $i++;
    }
?>
```