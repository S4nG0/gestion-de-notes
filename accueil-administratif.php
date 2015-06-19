<?php include 'header.php'; ?>

<div class="container admin">
    <div class="row text-center">
        <h1>Espace Administration</h1>
    </div>

    <div class="buttons-block">
        <ul class="buttons">
            <li>
                <a class="btn btn-default" href="add-etudiant.php">Enregistrer un étudiant</a>
            </li>
            <li>
                <a class="btn btn-default" href="add-enseignant.php">Enregistrer un enseignant</a>
            </li>
            <li>
                <a class="btn btn-default" href="add-module.php">Ajouter un module</a>
            </li>
            <li>
                <a class="btn btn-default" href="view-bulletin.php">Voir un bulletin de notes</a>
            </li>
        </ul>
    </div>

    <?php include 'menu.php'; ?>

    <div class="row text-center">
        <a class="bottom-link" href="deconnexion.php">Retour à l'écran de connexion</a>
    </div>
</div>

<?php include 'footer.php'; ?>