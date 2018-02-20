<?php include("partials/_header.html") ?>
<h2>Ejercicios</h2>
<?php
    phpinfo();
    $bankOne = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $bankTwo = array(11, 43, 73, 123, 6, 1, 100, 54, 12, 21);
    function promedio($array){
        $count = 0;
        foreach($array as $nums){
            $count = $count + $nums;
        }
        $prom = $count / count($array);
        return $prom;
    }


    function mediana($array){
        sort($array);

        $pos = round(count($array)/2);
        return $array[$pos];
    }
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
                    echo "<ul><li>Promedio: " . $prom . "</li>";
                    echo "<li>Mediana: " . $med . "</li>";
                    sort($array);
                    foreach($array as $nums) {
                        echo "<li>" . $nums . "</li>";
                    }
                    rsort($array);
                    foreach($array as $nums) {
                        echo "<li>" . $nums . "</li>";
                    }
                    echo "</ul>";
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


?>
<?php 
echo "Bancos de numeros<br>";
    foreach($bankOne as $num){
        echo $num . " ";
    }
    echo "<br>";
    foreach($bankTwo as $num){
            echo $num . " ";
    }
    echo "<br>";
    echo "<br>";
?>
<div class="row">
    <div class="col-6">
        <h3>Una función que reciba un arreglo de números y devuelva su promedio</h3>
        <?php
            echo "Banco 1: " . promedio($bankOne) . "<br>";
            echo "Banco 2: " . promedio($bankTwo) . "<br>";
        ?>
    </div>
    <div class="col-6">
        <h3>Una función que reciba un arreglo de números y devuelva su mediana</h3>
        <?php
            echo mediana($bankOne) . "<br>";
            echo mediana($bankTwo) . "<br>";
        ?>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3>Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor</h3>
        <div class="row">
            <div class="col-6">
                <?php
                    echo "Banco 1: <br>";
                    echo listArray($bankOne) . "<br>";
                ?>
            </div>
            <div class="col-6">
                <?php
                    echo "Banco 2: <br>";
                    echo listArray($bankTwo) . "<br>";
                ?>
            </div>
        </div>
    </div>
</div>
<h3>Una función que imprima una tabla html, que muestre los cuadrados y cubos de 1 hasta un número n</h3>
<?php
    squareAndCubes(5);
?>
<?php include("partials/_preguntas.html") ?>
<?php include("partials/_footer.html") ?>