<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="exo1.php">Exercice 1</a>
                </li>
                <li>
                    <a href="exo2.php">Exercice 2</a>
                </li>
                <li>
                    <a href="exo3.php">Exercice 3</a>
                </li>
                <li>
                    <a href="exo4.php">Exercice 4</a>
                </li>
                <li>
                    <a href="exo5.php">Exercice 5</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1><?= $titre ?></h1>
    <?= $content ?>
    
</body>
</html>