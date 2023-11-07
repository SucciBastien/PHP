<?php ob_start() ?>

<?php session_start(); ?>

<form action="" method="post">
    <input type="submit" name="reset" value="Réinitialiser"><br/>
</form>
<form action="" method="post">
    <label for="table">Quel est le chiffre ?</label>
    <input type="number" name="reponse" id="reponse"><br/>
    <input type="submit" value="Valider">
</form>

<div>
    <?php

        if(isset($_POST["reset"])){
                unset($_SESSION["nbRand"]);
            } 
        if(empty($_SESSION["nbRand"])){
            $_SESSION["nbRand"] = rand(0, 100);
            $_SESSION["compteur"] = 1;
            
        }
        else{
            if(isset($_POST["reponse"])){
                switch ($_POST["reponse"]){
                    case $_POST["reponse"]<$_SESSION["nbRand"] :
                        echo "Plus grand !";
                        $_SESSION["compteur"]++;
                        break;
                    case $_POST["reponse"]==$_SESSION["nbRand"] :
                        echo "Bien joué ! Le nombre était bel et bien " . $_SESSION["nbRand"] . "!<br/>";
                        echo "Vous avez réussis en " . $_SESSION["compteur"]++ . " essais";
                        session_destroy();
                        break;
                    case $_POST["reponse"]>$_SESSION["nbRand"] :
                        echo "Plus petit !";
                        $_SESSION["compteur"]++;
                        break;
                }
            }
        }
    ?>
</div>


<?php
$content = ob_get_clean();
$titre = "Trouver le nombre choisi par l'ordinateur";
require "template.php";
?>