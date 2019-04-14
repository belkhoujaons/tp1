<?php
//include
include "config.php";
//appel fonction
$base =connect();
//reccuperation des donnee
$n= $_REQUEST['nom'];
$p=$_REQUEST ['prénom'];
$nu=$_REQUEST ['numéro'];
$g=$_REQUEST ['gender'];
$e=$_REQUEST ['mail'];
$d=$_REQUEST ['date_de_naissance'];
$na=$_REQUEST ['nati'];
$in=$_REQUEST ['interet'] ;
$m=$_REQUEST ['mdp'];

$m =md5($m);
$req="INSERT INTO cc (ID,NOM,PRENOM,EMAIL,GENDER,NATIONALITE,INTERET,DATEDENAISSANCE,NUMTEL,MOTDEPASSE) VALUES (null,'$n','$p','$e','$g','$na','$in','$d','$nu','$mdp')";
$resp= $base->exec($req) ;
if($resp==1){
    echo "all done !";
}
else{
    echo"quelque chose qui cloche"; 
}

?>