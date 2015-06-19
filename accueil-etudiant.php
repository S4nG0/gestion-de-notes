<?php

include 'config/config.php';

if(!isset($_SESSION['personne'])){
        header('Location: index.php');
}else{
    if($_SESSION['personne']->statut != "etudiant"){
        header('Location: index.php');
    }
}

include 'header.php';

$etudiant = new Etudiant();
$ues = $etudiant->etudiant['UEs'];

?>
<div class="container etudiant">
    <div class="etudiant-block">
        <div class="row text-center">
            <h1>Espace étudiant</h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>Mes notes :</h2>
            </div>
        </div>
        
        <?php foreach($ues as $UE){ 
           
            $taille_module = sizeof($UE) - 4;
            
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><?php echo $UE['code'] ." : ". $UE['nom']; ?></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                for($i = 0; $i < $taille_module; $i++){
                            ?>
                            <tr>
                                <td><?php echo $UE[$i]['nom']; ?></td>
                                <td align="right"><?php
                                
                                $taille_epreuve = sizeof($UE[$i])-5;
                                //On va calculer la moyenne
                                $total = 0;
                                $note = 0;
                                for($j = 0; $j < $taille_epreuve; $j++){
                                    $note += $UE[$i][$j]['coefficient'] * $UE[$i][$j]['note']['note'];
                                    $total ++;
                                }
                                    $note = $note/$total;
                                    echo $note.'/20';
                                
                                
                                ?></td>
                            </tr>
                            
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <?php } ?>
        
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
        <div class="row text-center">
            <a class="bottom-link" href="deconnexion.php">Se déconnecter</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>