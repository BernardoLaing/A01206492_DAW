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

    function listArray($array) {
        $count = 0;
        foreach($array as $nums){
            $count = $count + $nums;
        }

        $prom = $count / count($array);
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

    function squareAndCubes($n) {
        echo "<table>";
        echo "<tr>
                    <th> n </th>
                    <th> n^2 </th>
                    <th> n^3 </th>
            </tr>";
        for($i = 1; $i <= $n; $i++) {
            $sq = $i**2;
            $cb = $i**3;
            echo "<tr>
                    <td> $i </td>
                    <td> $sq</td>
                    <td> $cb </td>
                </tr>";
        }
        echo "</table>";

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