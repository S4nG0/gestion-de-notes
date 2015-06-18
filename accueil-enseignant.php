<?php include 'header.php'; ?>
<div class="container enseignant">
    <div class="enseignant-block">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1>Espace enseignant</h1>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12">
                <h2>Filtrez les notes</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12">
                <select name="consultation" id="consultation">
                    <option value="etudiant" selected>Par étudiant</option>
                    <option value="promotion">Par classe</option>
                    <option value="controle">Par contrôle</option>
                </select>
                <button class="btn btn-default">Trier</button>
            </div>
        </div>

        <!-- block:NotesEtudiants -->
        <div class="row" id="etudiant">
            <div class="col-sm-12">
                <form action="accueil-enseignant.php" method="POST">
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
                                    <td><a href="single-etudiant.php">Charlebois</a></td>
                                    <td>Amber</td>
                                    <td>SID-1</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                                <tr>
                                    <td>Marcheterre</td>
                                    <td>Roger</td>
                                    <td>SID-1</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                                <tr>
                                    <td>Boulanger</td>
                                    <td>Audrey</td>
                                    <td>SID-2</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </form>
            </div>
        </div>

        <!-- block:Classe -->
        <div class="row text-center">
            <a class="bottom-link" href="index.php">Retour à l'écran de connexion</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>