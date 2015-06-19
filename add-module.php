<?php include 'header.php'; ?>

<div class="container admin">
    <div class="row text-center">
        <h1>Espace Administration</h1>
    </div>

    <?php include 'menu.php'; ?>

    <div class="add-module text-center">
        <h2>Ajout d'un module</h2>
        <form class="form-horizontal">

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="nom">Nom du module</label>
                    <div class="col-sm-6">
                        <input id="nom" name="nom" type="text" placeholder="Entrez le nom..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="code">Code module</label>
                    <div class="col-sm-6">
                        <input id="code" name="code" type="text" placeholder="Entrez le code..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="coefficient">Coefficient</label>
                    <div class="col-sm-6">
                        <input id="coefficient" name="coefficient" type="text" placeholder="Entrez le coefficient..." required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="ue">Unité d'enseignement</label>
                    <div class="col-sm-6">
                        <select id="ue" name="ue">
                            <option value="1">UE11</option>
                            <option value="2">UE12</option>
                            <option value="3">UE13</option>
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
        <a class="bottom-link" href="deconnexion.php">Retour à l'écran de connexion</a>
    </div>
</div>

<?php include 'footer.php'; ?>