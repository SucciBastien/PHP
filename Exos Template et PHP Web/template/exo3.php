<?php ob_start() ?>

<form action="#" method="post">
    <label for="table">Rayon :</label>
    <input type="number" name="rayon" id="rayon">
    <br/>
    <p>Périmètre : <input type="checkbox" name="peri" id="peri"></p>
    <p>Aire : <input type="checkbox" name="aire" id="aire"></p>
    <input type="submit" value="Envoyer">
</form>

<div>

    <?php

        if (isset($_POST["rayon"])){
            echo "<h2>Résulats</h2>";
            if (isset($_POST["peri"])){
                echo "Le périmètre d'un cercle de rayon " . $_POST["rayon"] . " est : " . 2*pi()*$_POST["rayon"] . ".<br/>";
            }
            else{
                echo "Le pèrimètre n'a pas été demandé.<br/>";
            }
            if (isset($_POST["aire"])){
                echo "L'aire' d'un cercle de rayon " . $_POST["rayon"] . " est : " . pi()*pow($_POST["rayon"], 2) . ".<br/>";
            }
            else{
                echo "L'aire n'a pas été demandée.<br/>";
            }
        }

    ?>

</div>

<?php
$content = ob_get_clean();
$titre = "Cercle - Périmètre et Aire";
require "template.php";
?>