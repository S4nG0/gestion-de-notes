<?php

include 'header.php';
include 'config/config.php';

?>
<div class="container etudiant">
    <div class="etudiant-block">
        <div class="row text-center">
            <h1>Liste des étudiants</h1>
        </div>

        <?php include 'menu.php'; ?>

        <div class="row" id="etudiant">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Promotion</td>
                                <td><span class="small">Moyenne<br />semestre 1</span></td>
                                <td><span class="small">Moyenne<br />semestre 2</span></td>
                                <td><span class="small">Moyenne<br />annuelle</span></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="single-bulletin.php">Charlebois</a></td>
                                <td>Amber</td>
                                <td>SID-1</td>
                                <td>/20</td>
                                <td>/20</td>
                                <td>/20</td>
                            </tr>
                            <tr>
                                <td><a href="single-bulletin.php">Marcheterre</a></td>
                                <td>Roger</td>
                                <td>SID-1</td>
                                <td>/20</td>
                                <td>/20</td>
                                <td>/20</td>
                            </tr>
                            <tr>
                                <td><a href="single-bulletin.php">Boulanger</a></td>
                                <td>Audrey</td>
                                <td>SID-2</td>
                                <td>/20</td>
                                <td>/20</td>
                                <td>/20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>