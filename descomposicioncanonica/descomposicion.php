<?php 
    $n=$_GET['n1'];
    
    function primo($x){
        $pre=true;
        for ($i=2; $i <$x ; $i++) { 
            if ($x%$i==0) {
                $pre=false;
            }
        }
        return $pre;
    }

    function descomponer($x){
        for ($i=2; $i <=$x ; $i++) { 
            if ((primo($i)==true)and($x%$i==0)) {
                $j=0;
                do {
                    $x=$x/$i;
                    $j++;
                } while ($x%$i==0);

                if ($x==1) {
                    echo $i."^".$j;
                }else {
                    echo $i."^".$j." x ";
                }
                
            }
        }
    }

    echo "<a href='../index.php'>Inicio</a><br><br>";
    echo "$n = ";
    echo descomponer($n);
?>