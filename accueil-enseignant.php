<?php

include 'config/config.php';
include 'classes/database.class.php';
if(!isset($_SESSION['personne'])){
        header('Location: index.php');
}else{
    if($_SESSION['personne']->statut != "enseignant"){
        header('Location: index.php');
    }
}

include 'header.php';

?>
<div class="container enseignant">
    <div class="enseignant-block">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1>Espace enseignant</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <label for="consultation">Filtrez les notes : </label>
                <select name="consultation" id="consultation" onchange="showDiv(this);">
                    <option value="etudiant" selected>Par étudiant</option>
                    <option value="classe">Par classe</option>
                    <option value="controle">Par contrôle</option>
                </select>
            </div>
        </div>

        <!-- block:NotesEtudiants -->
        <div class="row" id="etudiant">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Promotion</td>
                                <td><span class="small">Moyenne<br/>semestre 1</span></td>
                                <td><span class="small">Moyenne<br/>semestre 2</span></td>
                                <td><span class="small">Moyenne<br/>annuelle</span></td>
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
                                <td><a href="single-etudiant.php">Marcheterre</a></td>
                                <td>Roger</td>
                                <td>SID-1</td>
                                <td>/20</td>
                                <td>/20</td>
                                <td>/20</td>
                            </tr>
                            <tr>
                                <td><a href="single-etudiant.php">Boulanger</a></td>
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

        <!-- block:Classe -->
        <div class="row" id="classe">
            <div class="classe-block">
                <div class="col-sm-12">
                    <h2>SID-1</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Nom</td>
                                    <td>Prénom</td>
                                    <td><span class="small">Moyenne<br/>semestre 1</span></td>
                                    <td><span class="small">Moyenne<br/>semestre 2</span></td>
                                    <td><span class="small">Moyenne<br/>annuelle</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="single-etudiant.php">Charlebois</a></td>
                                    <td>Amber</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                                <tr>
                                    <td><a href="single-etudiant.php">Marcheterre</a></td>
                                    <td>Roger</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="classe-block">
                <div class="col-sm-12">
                    <h2>SID-2</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Nom</td>
                                    <td>Prénom</td>
                                    <td><span class="small">Moyenne<br/>semestre 1</span></td>
                                    <td><span class="small">Moyenne<br/>semestre 2</span></td>
                                    <td><span class="small">Moyenne<br/>annuelle</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="single-etudiant.php">Boulanger</a></td>
                                    <td>Audrey</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- block:Controle -->
        <div class="row" id="controle">
            <div class="controle-block">
                <div class="col-sm-12">
                    <h2>Mathématiques ou Economie</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Nom</td>
                                    <td>Prénom</td>
                                    <td><span class="small">Moyenne<br/>semestre 1</span></td>
                                    <td><span class="small">Moyenne<br/>semestre 2</span></td>
                                    <td><span class="small">Moyenne<br/>annuelle</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="single-etudiant.php">Charlebois</a></td>
                                    <td>Amber</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                                <tr>
                                    <td><a href="single-etudiant.php">Marcheterre</a></td>
                                    <td>Roger</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="controle-block">
                <div class="col-sm-12">
                    <h2>Statistiques et Economie</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Nom</td>
                                    <td>Prénom</td>
                                    <td><span class="small">Moyenne<br/>semestre 1</span></td>
                                    <td><span class="small">Moyenne<br/>semestre 2</span></td>
                                    <td><span class="small">Moyenne<br/>annuelle</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="single-etudiant.php">Charlebois</a></td>
                                    <td>Amber</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                                <tr>
                                    <td><a href="single-etudiant.php">Marcheterre</a></td>
                                    <td>Roger</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                    <td>/20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
    </div>
</div>
<?php
    include 'footer.php';
?>
