<?php
include 'header.php';
include 'classes/administration.class.php';
$adminstrateur=new Administration();
$resPromotion=$adminstrateur->recuperePromotion();
if(isset($_POST['nom'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['code_postal']) &&
        !empty($_POST['ville']) && !empty($_POST['promotion'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $code_postal=$_POST['code_postal'];
        $ville=$_POST['ville'];
        $idPromotion=$_POST['promotion'];
        $pseudo=$adminstrateur->genererPseudo($nom,$prenom);
        $password=hash('sha256',$pseudo);
        $adminstrateur->ajouterEtudiant($idPromotion,$nom,$prenom,$adresse,$code_postal,$ville,$pseudo,$password);
        header("Location:add-etudiant.php");
    }
}
else {
    ?>

    <div class="container admin">
        <div class="row text-center">
            <h1>Espace Administration</h1>
        </div>

        <?php include 'menu.php'; ?>

        <div class="add-etudiant text-center">
            <h2>Ajout d'un étudiant</h2>

            <form class="form-horizontal" action="add-etudiant.php" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input id="etudiant" name="etudiant" type="hidden" value="etudiant" placeholder="Étudiant">
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
                    <label class="col-sm-4 control-label" for="promotion">Classe</label>

                    <div class="col-sm-6">
                        <select id="promotion" name="promotion">
                            <?php while ($promotion = $resPromotion->fetch_object()) { ?>
                                <option
                                    value="<?php echo $promotion->idPromotion; ?>"><?php echo $promotion->nom; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <input type="submit" id="validate" name="validate" class="btn"/>
                        <input type="reset" id="reset" name="reset" class="btn"/>
                    </div>
                </div>
            </form>
        </div>


        <div class="row text-center">
            <a class="bottom-link" href="deconnexion.php">Retour à l'écran de connexion</a>
        </div>
    </div>

    <?php
    include 'footer.php';
}
?>