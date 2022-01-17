<?php 
//fonction qui retourne l'objet de connexion PDO
function connexion()
{ 
    //Déclaration des informations 
    $hostnom='host=localhost' ;
    $username='root' ;
    $password='';
    $bdd='lesclients' ;
    //Tentative de connexion
    try 
    {
$monPdo=new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8",$username,$password);
return $monPdo;
    }
    //en cas d'erreur 
    catch (PDOException $e)
    {
        echo $e->getMessage();
        return null;
    }
}
?>