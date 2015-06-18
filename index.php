<?php include 'header.php'; ?>
    <div class="container sign-in">
        <div class="sign-in-block">
            <div class="row text-center">
                <h5>Bienvenue sur la gestion des notes de l'<strong>IUT C</strong>...</h2>
            </div>
            <div class="row text-center">
                <h1>Connexion</h1>
            </div>
            <!-- block:Login-form -->
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <label for="identifiant">Identifiant</label>
                        <input class="text-center" type="text" name="identifiant" id="identifiant" placeholder="Votre identifiant">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <label for="password">Mot de passe</label>
                        <input class="text-center" type="text" name="password" id="password" placeholder="Votre mot de passe">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <input type="submit" value="Envoyer" class="btn btn-default">
                    </div>
                </div>
            </form>

        </div>
    </div>
<?php include 'footer.php'; ?>
