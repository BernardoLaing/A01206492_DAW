<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="BernardoLaing">

        <title>Lab 6</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
            <h2>Ejercicios</h2>
            <?php
                $bankOne = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
                $bankTwo = array(11, 43, 73, 123, 6, 1, 100, 54, 12, 21);
//                echo $bankOne . "<br>" . $bankTwo;
                function promedio($array){
                    $count = 0;
                    foreach($array as $nums){
                        $count = $count + $nums;
                    }
                    $prom = 1;
//                    $prom = $count / length($array);
                    return $prom;
                }
            
            
                function mediana($array){
                    sort($array);
                    
                    $pos = round(length($array)/2);
                    return $array[$pos];
                }
            
                function listArray($array) {
                    $count = 0;
                    foreach($array as $nums){
                        $count = $count + $nums;
                    }
                    
                    $prom = $count / length($array);
                    $med = mediana($array);
                    echo "<li>Promedio: " . $prom . "</li>";
                    echo "<li>Mediana: " . $med . "</li>";
                    sort($array);
                    foreach($array as $nums) {
                        echo "<li>" . $nums . "</li>";
                    }
                    rsort($array);
                    foreach($array as $nums) {
                        echo "<li>" . $nums . "</li>";
                    }
                }
            
            
            ?>
            <h3>Una función que reciba un arreglo de números y devuelva su promedio</h3>
            <?php
                echo promedio($bankOne);
                echo promedio($bankTwo);
            ?>
            <h3>Una función que reciba un arreglo de números y devuelva su mediana</h3>
            <?php
                echo mediana($bankOne);
                echo mediana($bankTwo);
            ?>
            <h3>Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor</h3>
            <?php
                echo listArray($bankOne);
                echo listArray($bankTwo);
            ?>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script src="lab6.js"></script>

    </body>
</html>