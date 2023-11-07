<?php ob_start() ?>

<form action="#" method="get">
    <label for="nbNotes">Entrez le nombres de notes que vous voulez entrer</label>
    <input type="number" name="nbNotes" id="nbNotes">
    <input type="submit" name="Valider" value="Valider">
</form>

<br/>

<div class="notes">
    <?php 
        if (isset($_GET["nbNotes"]) and isset($_GET["Valider"])){
            $nbNotes = $_GET["nbNotes"];
            $notes=[];

            echo "<form action='' method='post'>";
            for ($i=1; $i<=$nbNotes; $i++){
                echo "Entrez la note $i :<input type='number' name='notes[]' min='0' max='20'><br/><br/>";
            }
            echo "<input type='submit' name='validNotes' value='Valider'>";
            echo "</form>";
        
        
            if (isset($_POST["validNotes"])){
                $notes = $_POST["notes"];
                echo "<br/>La moyenne est de " .  round(array_sum($notes)/$nbNotes, 1);
            }

        }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Calculer la moyenne";
require "template.php";
?>