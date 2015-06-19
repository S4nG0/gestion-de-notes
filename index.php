<?php
include 'config/config.php';

$error = false;
if(isset($_SESSION['personne'])){
    switch($_SESSION['personne']->statut) {
            case "etudiant" :
                header('Location: accueil-etudiant.php');
                break;
            case "administratif" :
                header('Location: accueil-administratif.php');
                break;
            case "enseignant" :
                header('Location: accueil-enseignant.php');
                break;
            default :
                header('Location: error.php');
                break;
        }
}

include 'header.php';

if( (isset($_POST['identifiant']) && !empty($_POST['identifiant'])) && (isset($_POST['password']) && !empty($_POST['password']))){
    $mysqli = Database::getInstance();
    $identifiant=$mysqli->real_escape_string($_POST['identifiant']);
    $password=$mysqli->real_escape_string($_POST['password']);
    $resPersonne=$mysqli->query("SELECT * FROM personne WHERE pseudo = '$identifiant'");
    $personne=$resPersonne->fetch_object();
    if(hash("sha256", $password) != $personne->password){
        $error = true;
    }else{
        $_SESSION['personne'] = $personne;
        switch($personne->statut) {
            case "etudiant" :
                header('Location: accueil-etudiant.php');
                break;
            case "administratif" :
                header('Location: accueil-administratif.php');
                break;
            case "enseignant" :
                header('Location: accueil-enseignant.php');
                break;
            default :
                header('Location: erreur-statut.php');
                break;
        }
        //On redirige sur la page du statut!!!
    }
}
    ?>
    <div class="container sign-in">
        <div class="sign-in-block">
            <div class="row text-center">
                <h5>Bienvenue sur la gestion des notes de l'<strong>IUT C</strong>...</h5>
            </div>
            <div class="row text-center">
                <h1>Connexion</h1>
            </div>
            <!-- block:Login-form -->
            <form action="index.php" method="POST">
                <?php if($error == true) echo '<span class="error">Votre identifiant ou mot de passe sont invalide</span>'; ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <label for="identifiant">Identifiant</label>
                        <input class="text-center" type="text" name="identifiant" id="identifiant"
                               placeholder="Votre identifiant">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <label for="password">Mot de passe</label>
                        <input class="text-center" type="password" name="password" id="password"
                               placeholder="Votre mot de passe">
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
<?php
    include 'footer.php';
?>