

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
    <div class="grid-container">
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>  
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>  
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div>  
    </div>
    </header>


    <form method="post" action="index.php">
        <input type="text" name="numero1" required autocomplete="off">
        <select name="opciones">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
        </select>
        <br>
        <input type="text" name="numero2" required autocomplete="off">
        
        
        <input type="submit" name="calcular" value="Calcular">

    </form>



</body>
</html>

<?php
include("clase.php");
if(isset($_REQUEST['calcular'])){
    $n1=$_REQUEST['numero1'];
    $n2=$_REQUEST['numero2'];
    $op=$_REQUEST['opciones'];

    switch($op){
        case 0:echo "$n1 + $n2 = ".matematica::sumar($n1,$n2);break;
        case 1:echo "$n1 - $n2 = ".matematica::restar($n1,$n2);break;
        case 2:echo "$n1 * $n2 = ".matematica::multiplicar($n1,$n2);break;
        case 3:echo "$n1 / $n2 = ".matematica::dividir($n1,$n2);break;
    }
}
?>