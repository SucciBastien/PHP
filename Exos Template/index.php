<?php ob_start() ?>

<?php
$content = ob_get_clean();
$titre = "Acceuil";
require "template.php";
?>
