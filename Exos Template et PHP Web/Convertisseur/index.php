<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Convertisseur de monnaie</title>
</head>
<body>
    <header>
        <h1>Convertisseur de monnaie</h1>
    </header>

    <section>
        <form action="" method="post">
            <article>
                <p>Montant (€) :</p>
                <div>
                    <input type="number" name="montant" required autofocus>
                </div>
            </article>
            <article>
                <p>Convertir en :</p>
                <div>
                    <select name="monnaie" id="" required>
                        <option value="" selected>Choisir une monnaie</option>
                        <option value="dollarsUSA">Dollars USA</option>
                        <option value="dollarsCA">Dollars CA</option>
                        <option value="pounds">Pounds UK</option>
                        <option value="pesos">Pesos MEX</option>
                        <option value="yen">Yen JAP</option>
                        <option value="roupie">Roupies Mauricienne</option>
                    </select>
                </div>
            </article>
            <article>
                <p>Résultat :</p>
                <div class='resultat'>
                <?php
                    if (isset($_POST["montant"]) and isset($_POST["valider"])){
                        $monnaie = $_POST["monnaie"];
                        if ($monnaie=="dollarsUSA"){
                            echo $_POST['montant']*1.07;
                        }
                        if ($monnaie=="dollarsCA"){
                            echo $_POST['montant']*1.47;
                        }
                        if ($monnaie=="pounds"){
                            echo $_POST['montant']*0.87;
                        }
                        if ($monnaie=="pesos"){
                            echo $_POST['montant']*18.76;
                        }
                        if ($monnaie=="yen"){
                            echo $_POST['montant']*160.71;
                        }
                        if ($monnaie=="roupie"){
                            echo $_POST['montant']*47.14;
                        }
                    }
                ?>
                </div>
            </article>
            <article>
                <input type="submit" name="valider" value="Convertir">
            </article>
        </form>

        <?php
            
        ?>
    </section>
</body>
</html>