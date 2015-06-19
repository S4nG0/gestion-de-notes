<?php

include 'header.php';
include 'config/database.php';

?>
<div class="container etudiant">
    <div class="etudiant-block">
        <div class="row text-center">
            <h1>Liste des étudiants</h1>
        </div>

        <?php include 'menu.php'; ?>

        <div class="row text-center">
            <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>