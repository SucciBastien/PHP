<?php ob_start() ?>

<?php session_start() ?>

<form action="" method="post">
    <input type="submit" name="reset" value="Réinitialiser"><br/>
</form>
<form action="#" method="post">
    <label for="table">Entrez le nombres de notes que vous voulez entrer</label>
    <input type="number" name="nbNotes" id="nbNotes">
    <input type="submit" value="Valider">
</form>

<div class="notes">


    <?php 
        if (isset($_POST["reset"])){
            unset($_SESSION["nbNotes"]);
        }
        if (empty($_SESSION["nbNotes"])){
            $_SESSION["nbNotes"] = $_POST["nbNotes"];
            $_SESSION["noteTot"] = 0;
            $notes = [];
            if (empty($notes)){
                for ($i=1; $i<=$_SESSION["nbNotes"]; $i++){
                    $_POST["note".$i] = 0;
                }
            }
            
        }
        else{
            echo "<form action='' method='post'>";
            for ($i=1; $i<=$_SESSION["nbNotes"]; $i++){
                echo "<p>Entrez la note $i : <p><input type='number' name='note$i' id='note$i'><br/>";
                $notes[$i-1] = $_POST["note".$i];
            }
            echo "<input type='submit' name='validNotes' value='Valider'>";
            echo "</form>";
        }
        
        if (isset($_POST["validNotes"])){
            echo "La moyenne est de " .  round(array_sum($notes)/$_SESSION["nbNotes"], 1) . "<br/>";
        }
        
    ?>

</div>





<?php
$content = ob_get_clean();
$titre = "Calculer la moyenne";
require "template.php";
?>