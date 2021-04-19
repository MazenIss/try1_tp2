<?php
include_once 'autoload.php';
$name=$_GET['ajoutname'];
$prenom=$_GET['ajoutprenom'];
$age=$_GET['ajoutage'];
$section=$_GET['ajoutsection'];
if(isset($name) &&($age>0)){
    $p=new PersonnesRepository;
    $p->ajouter($name,$prenom,$age,$section);
}
header('location:home.php');

