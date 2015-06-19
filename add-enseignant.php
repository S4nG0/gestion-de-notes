<?php include 'header.php'; ?>

<div class="container admin">
    <div class="row text-center">
        <h1>Espace Administration</h1>
    </div>

    <?php include 'menu.php'; ?>

    <div class="add-enseignant text-center">
        <h2>Ajout d'un enseignant</h2>
        <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input id="enseignant" name="enseignant" type="hidden" value="enseignant" placeholder="Enseignant">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="nom">Nom</label>
                    <div class="col-sm-6">
                        <input id="nom" name="nom" type="text" placeholder="Entrez le nom..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="prenom">Prénom</label>
                    <div class="col-sm-6">
                        <input id="prenom" name="prenom" type="text" placeholder="Entrez le prénom..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="adresse">Adresse</label>
                    <div class="col-sm-6">
                        <input id="adresse" name="adresse" type="text" placeholder="Entrez l'adresse" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="code_postal">Code Postal</label>
                    <div class="col-sm-6">
                        <input id="code_postal" name="code_postal" type="text" placeholder="Entrez le CP" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="ville">Ville</label>
                    <div class="col-sm-6">
                        <input id="ville" name="ville" type="text" placeholder="Entrez la ville..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="module">Module</label>
                    <div class="col-sm-6">
                        <select id="module" name="module">
                            <option value="1">Anglais</option>
                            <option value="2">Mathématiques</option>
                            <option value="3">Economie</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <input type="submit" id="validate" name="validate" class="btn" />
                        <input type="reset" id="reset" name="reset" class="btn" />
                    </div>
                </div>
        </form>
    </div>


    <div class="row text-center">
        <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
    </div>
</div>

<?php include 'footer.php'; ?>