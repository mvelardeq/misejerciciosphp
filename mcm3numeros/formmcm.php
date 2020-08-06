<?php 
    $n1=$_GET['n1'];
    $n2=$_GET['n2'];
    $n3=$_GET['n3'];

    function mcm($x,$y,$z){
        for ($i=1; $i <=$x*$y*$z; $i++) { 
            if (($i%$x==0)and($i%$y==0)and($i%$z==0)) {
                return $i;
                break;
            }
        }
    }

    echo "<a href='../index.php'>Inicio</a><br>";
    echo mcm($n1,$n2,$n3);
?> 