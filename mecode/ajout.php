<?php
session_start();
$name=$_POST['ajoutname'];
$prenom=$_POST['ajoutprenom'];
$age=$_POST['ajoutage'];
$section=$_POST['ajoutsection'];
if(isset($name)){
    $request="INSERT INTO  personnes (`nom`, `prenom`, `age`,`section` ) VALUES (:?,:?,:?,:?)";
    $bddd=$GLOBALS['a'];
    $req=$bddd->prepare($request);
    $req->execute([$name,$prenom,$age,$section]);
}
header('location:home.php');

