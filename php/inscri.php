<?php
//include
include "config.php";
//appel fonction
$base =connect();
//reccuperation des donnee
$e= $_REQUEST['email'];
$m=$_REQUEST ['mdp'];
$mdpc =md5($m);
$req="INSERT INTO users (id,email, password) VALUES (null,'$e','$m')";
//exec INSERT , UPDATE , DELETE
//type retour exec int|boolean
//trajaa int itha requ jawha behii : int fih nbr de ligne li aamaltelhom insertion
//trajaa boolean false en cas d echec
$resp= $base->exec($req) ;
if($resp==1){
    echo "donnees jawha behi";
}
else{
    echo"bara thabet fel code"; 
}
?>