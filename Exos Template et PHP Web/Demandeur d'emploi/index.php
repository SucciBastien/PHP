<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recherche d'emploi</title>
</head>
<body>
    <fieldset>
        <legend>Recherche d'emploi :</legend>
        <h2>Remplir la fiche</h2>
        <form action="" method="post">
            <div>
                <p>Prénom</p>
                <input type="text" name="prenom" required>
            </div>
            <div>
                <p>Nom</p>
                <input type="text" name="nom" required>
            </div>
            <div>
                <p>Naissance</p>
                <input type="date" name="date" required>
            </div>
            <div>
                <p>Email</p>
                <input type="email" name="mail" required>
            </div>
            <article class="langues">
                <h2>Langues pratiquées</h2>
                <select name="langues" id="" multiple required>
                    <option>Allemand</option>
                    <option>Anglais</option>
                    <option>Arabe</option>
                    <option>Espagnol</option>
                    <option>Français</option>
                    <option>Hindi</option>
                    <option>Italien</option>
                    <option>Japonais</option>
                    <option>Koréen</option>
                    <option>Mandarin</option>
                    <option>Russe</option>
                </select>
            </article>
            <article class="competences">
                <h2>Compétences informatiques</h2>
                <label for="html">HTML 5</label>
                <input type="checkbox" name="html" id="html" class="check">
                <label for="css">CSS 3</label>
                <input type="checkbox" name="css" id="css" class="check">
                <label for="js">Javascript</label>
                <input type="checkbox" name="js" id="js" class="check">
                <label for="jq">JQuery</label>
                <input type="checkbox" name="jq" id="jq" class="check">
                <label for="aj">AJAX</label>
                <input type="checkbox" name="aj" id="aj" class="check">
                <label for="php">PHP</label>
                <input type="checkbox" name="php" id="php" class="check">
                <label for="sql">SQL</label>
                <input type="checkbox" name="sql" id="sql" class="check">
                <label for="jee">JEE</label>
                <input type="checkbox" name="jee" id="jee" class="check">
                <label for="asp">ASP.Net</label>
                <input type="checkbox" name="asp" id="asp" class="check">
            </article>
            <input type="reset" value="Effacer" class="btn">
            <input type="submit" name="valid" value="Envoyer" class="btn">
        </form>
    </fieldset>

    <fieldset>
        <legend>Votre formulaire</legend>
        <?php
            if (isset($_POST["valid"])){
                $competences = [];
                if (isset($_POST["html"])){
                    array_push($competences, "HTML 5");
                }
                if (isset($_POST["css"])){
                    array_push($competences, "CSS 3");
                }
                if (isset($_POST["js"])){
                    array_push($competences, "Javascript");
                }
                if (isset($_POST["jq"])){
                    array_push($competences, "JQuery");
                }
                if (isset($_POST["aj"])){
                    array_push($competences, "AJAX");
                }
                if (isset($_POST["php"])){
                    array_push($competences, "PHP");
                }
                if (isset($_POST["sql"])){
                    array_push($competences, "MySQL");
                }
                if (isset($_POST["jee"])){
                    array_push($competences, "JEE");
                }
                if (isset($_POST["asp"])){
                    array_push($competences, "ASP.Net");
                }
                echo "Vous êtes " . $_POST["prenom"] . " " . $_POST["nom"] . "<br/>Vous êtes né le " . $_POST["date"] . "<br/>Votre adresse mail est " . $_POST["mail"] . "<br/>Vous parlez " . $_POST["langues"] . " et vous êtes capable d'utiliser " . implode(", " ,$competences);
            }


        ?>
    </fieldset>
    
</body>
</html>