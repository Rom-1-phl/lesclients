<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les clients</title>
</head>
<body>
    <?php 
    //utiliser le fichier conexion.php
    include ("connexionPDO.php");
    //requete SQL pour récuperer les données
    $sql = "SELECT nom,rue,CP,ville FROM client ";
    //connexion à la BD
    $monPDO = connexion();
    //Exécution de la requête sql 
    $lesClients = $monPDO->query($sql);
    ?>
    <h3> AFFICHAGE DES <?php echo $lesClients->rowCount();?> CLIENTS ENREGISTRES</h3>
    <br/>
    <table border=1>
        <tr>
            <th>RAISON SOCIALE</th>
            <th>RUE</th>
            <th>CODE POSTAL</th>
            <th>VILLE</th>
        </tr>
        <?php
        //POUR toutes les lignes du tableau jeu d'enregistrements
        foreach($lesClients as $ligne)
        {
        //affichage des données
        echo '<tr>';
            echo '<td>'.$ligne['nom'].'</td><td>'.$ligne['rue'].'</td><td>'.$ligne['CP'].'</td><td>'.$ligne['ville'].'</td>';
            echo '</tr>';

        }
    $lesClients->closeCursor();
    ?>
    </table>

    <h4>Ajouter un nouveau client</h4>
    <p>
    <label for="raison">Raison Sociale</label>
    <input type="text" id = "raison" name = "raison"><br><br>
    <label for="rue">rue</label>
    <input type="text" id = "rue" name = "rue"><br><br>
    <label for="cp">Code postale</label>
    <input type="text" id = "cp" name = "cp"><br><br>
    <label for="ville">ville</label>
    <input type="text" id = "ville" name = "ville"><br><br>
    
    </p>
    <input type="submit" value="envoyer">

    <?php $sql1 = "SELECT MAX(numcli) + 1 FROM client;"?>

</body>
</html>