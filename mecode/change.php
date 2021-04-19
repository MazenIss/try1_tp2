<?php
include_once 'autoload.php';
$cur=$_POST['curname'];
$name=$_POST['changename'];
$prenom=$_POST['changeprenom'];
$age=$_POST['changeage'];
$section=$_POST['changesection'];
if(isset($cur) && $cur!=""){
    $p=new PersonnesRepository();
    $res=$p->findByname($cur);

    $name=(isset($_POST['changename']) && $_POST['changename']!="" )? $_POST['changename'] : $res->nom;
    $prenom=(isset($_POST['changeprenom']) && $_POST['changeprenom']!="")? $_POST['changeprenom'] : $res->prenom;
    $age=(isset($_POST['changeage']) && $_POST['changeage']!=0)? $_POST['changeage'] : $res->age;
    $section=(isset($_POST['changesection']) && $_POST['changesection']!="")? $_POST['changesection'] : $res->section;
    $p->modifier($cur,$name,$prenom,$age,$section);
}
header('location:home.php');

