<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario para ordenar números</h1>
    <form action="ordenar.php" method="get">
        <?php 
            $n=$_GET['cantidad'];
            for ($i=1; $i <=$n ; $i++) { 
                echo "<label for='a$i'>N° $i :</label>
                <input type='number' name='$i' id='a$i'><br>";
            }
            echo"<input type=submit value='ordenar'>";
            echo var_dump($n);
        ?>
    </form>
</body>
</html>