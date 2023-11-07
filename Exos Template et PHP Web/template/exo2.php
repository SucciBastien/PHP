<?php ob_start() ?>

<form action="#" method="post">
    <label for="pyra">Hauteur de la pyramide</label>
    <input type="number" name="pyra" id="pyra">
    <input type="submit" value="Envoyer">
</form>

<div>
    <?php
        $tab = [];
        
        if(isset($_POST["pyra"])){
            for ($i=0; $i<=$_POST["pyra"]; $i++){
                for ($j=0; $j<$i; $j++){
                    $tab[$i][$j] = "°";
                    echo $tab[$i][$j];
                }
                echo "<br/>";
            }
        
            for ($i=2; $i<=$_POST["pyra"]; $i++){
                for ($j=$i; $j<=$_POST["pyra"]; $j++){
                    $tab[$i][$j] = "°";
                    echo $tab[$i][$j];
                }
                echo "<br/>";
            }
        }
        else{
            echo "<h2>Entrez une valeur.</h2>";
        }

        
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Affichage d'une pyramide";
require "template.php";
?>