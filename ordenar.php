<?php 
    $i=3;
    function maximo($a){
        $m=count($a);
        for ($i=1; $i <=$m ; $i++) { 
            for ($j=1; $j <=($m-$i) ; $j++) { 
                if ($a[$i]>$a[$i+$j]) {
                    $p=$a[$i];
                    $q=$a[$i+$j];
                    $a[$i]=$q;
                    $a[$i+$j]=$p;
                break;
                }
            }
        }
        return $a[$m];
    }
    var_dump(maximo($_GET));
?>