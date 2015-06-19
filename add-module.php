<?php
include 'header.php';
include 'classes/administration.class.php';
$administration=new Administration();
$resUE=$administration->recupereUE();
if((isset($_POST['nom'])) && !empty($_POST['nom']) && (isset($_POST['code'])) && !empty($_POST['code']) &&
   (isset($_POST['coefficient'])) && !empty($_POST['coefficient']) && (isset($_POST['ue'])) && !empty($_POST['ue'])){
    $nom=$_POST['nom'];
    $code=$_POST['code'];
    $coefficient=$_POST['coefficient'];
    $ue=$_POST['ue'];
}
?>
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
                            <?php while($ue= $resUE->fetch_object()){?>
                                <option value="<?php echo $ue->idUE; ?>"><?php echo $ue->code; ?></option>
                            <?php } ?>
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