<?php
session_start();
$name=$_POST['deletebyname'];
if(isset($name)){
$request = "delete from personnes where nom=? ";
$bddd=$GLOBALS['a'];
$req = $bddd->prepare($request);
$req->execute([$name]);
    header('location:home.php');
}
else { header('location:home.php');}



