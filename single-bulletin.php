<?php

include 'header.php';
include 'config/config.php';

?>
<div class="container etudiant">
    <div class="etudiant-block">
        <div class="row text-center">
            <h1>Bulletin de note de <span class="text-italic"><span class="text-uppercase">VANDERMEERSCH</span> Julien</span></h1>
        </div>

        <?php include 'menu.php'; ?>

        <div class="row">
            <h2>Semestre 1</h2>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>UE11 : Accueil</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mathématiques ou Economie</td>
                                <td align="right">18/20</td>
                            </tr>
                            <tr>
                                <td>Statistique descriptive 1</td>
                                <td align="right">15/20</td>
                            </tr>
                            <tr>
                                <td>Projet personnel et professionnel</td>
                                <td align="right">20/20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>UE12 : Statistiques et outils mathématiques</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Statistique descriptive 2</td>
                                <td align="right">16/20</td>
                            </tr>
                            <tr>
                                <td>Probabilités et simulations 1</td>
                                <td align="right">10/20</td>
                            </tr>
                            <tr>
                                <td>Etudes statistiques et enquêtes</td>
                                <td align="right">18/20</td>
                            </tr>
                            <tr>
                                <td>Mathématiques pour les probabilités et la statistique</td>
                                <td align="right">14.5/20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr align="right">
                                <td>Moyenne Générale au Semestre 1</td>
                                <td align="right">12/20</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <a class="bottom-link" href="view-bulletin.php">Retour à la liste des étudiants</a>
            <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>