<?php 
$bdd = new PDO('mysql:host=localhost;dbname=guinguette;charset=utf8','root','');
if(isset($_POST["button"]))
{
    if(isset($_POST["button"]))
    {
        $req="INSERT INTO tablerestaurant(IntExt, NbSiege) VALUES('".$_POST["int_ext"]."', ".$_POST["NbSiege"].")";
        echo $_POST["int_ext"];
        echo $req;
        $test=$bdd->exec($req);
        echo $test;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<li><a href="backoffice.php">Retour au back office</a></li>
<div class="formulaire">
    <form action="table.php" method="POST"  class="formulaire"> <!--1 pour valeur intérieur | 0 pour valeur extérieur -->
        <label for="interieur"> interieur ? <input type="radio" name="int_ext" id="interieur" value="1"></label> 
        <label for="exterieur"> exterieur ? <input type="radio" name="int_ext" id="exterieur" value="0"></label>
        <label for="NbSiege"> Nombre de siege:  <select name="NbSiege" id="NbSiege"><?php
            $compteur = 1;
            for( $compteur; $compteur<20; $compteur++){
            echo  "<option value =".$compteur.">".$compteur."</option>";
            }
            ?></select></label><br>
        <input type="submit" name="button" id="button" value ="Envoyer">
    </form>
</div>

</body>
</html>