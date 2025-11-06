<?php
if (!isset($_COOKIE["contador"])){
    setcookie("contador", 0);
}else{
    setcookie("contador",$_COOKIE["contador"]+1);
}
if (!isset($_GET["descompte"])){
    setcookie("haComprat", 0);
}else{
    setcookie("haComprat",1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comptadors_visites</title>
</head>
<body>
    <h1>Aquesta es la meva botiga!</h1>
    <p>Comptador de visites: </p>
    <?php
    echo $_COOKIE["contador"];
    if($_COOKIE["contador"]==5){
        echo"<br>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }elseif($_COOKIE["contador"] == 10 && $_COOKIE["haComprat"] == 0){
        echo"<br>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    }
    ?>
    <form method="GET_OR_POST">
        <label for="descompte">Inserta el teu descompte</label>
        <input type="text" name="descompte" id="descompte">
        <input type="submit" value="Compra">
    </form>
</body>
</html>
