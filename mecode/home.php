<?php
include_once 'isLoginBefore.php';
$pagetitle='home';
include_once 'frag/script.php';
?>
<?php
include_once 'classes/ConnexionBD.php';
$bdd = ConnexionBD::getInstance();
$GLOBALS['a'] =$bdd;
$query = "select * from personnes ";

$response = $bdd->prepare($query);
$response->execute([]);
$Personnes = $response->fetchAll(PDO::FETCH_OBJ);

?>
<div class="alert alert-sucesss">
Bienevenu chez nous voici votre listes de personnes:
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">age</th>
        <th scope="col">photo</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($Personnes as $personne) {
        ?>
        <tr>
            <td><?= $personne->nom ?></td>
            <td><?= $personne->prenom ?></td>
            <td><?= $personne->age ?></td>
            <td><?= $personne->section ?></td>
        </tr>
        <?php
    }

    ?>

    </tbody>
</table>
<form action="delete.php"
      method="post">
    <div class="form-group">
        <label for="exampledelete">Enter a name of a person u want to delete</label>
        <input
                type="text"
                name="deletebyname"
                class="form-control"
                id="exampledelete"
                placeholder="name of a person"
    </div>
    <button type="delete" class="btn btn-primary">delete</button>
</form>
<div name="ajt">
   <form action="ajout.php"
      method="post">
    <div class="form-group">
        <label for="nom">Enter the name of the person u want to add</label>
        <input
                type="text"
                name="ajoutname"
                class="form-control"
                id="exampleajout"
                placeholder="the name of the person"
        <label for="prenom">Enter the first name of the person u want to add</label>
        <input
                type="text"
                name="ajoutprenom"
                class="form-control"
                id="exampleajout"
                placeholder="the first  name of the person"
        <label for="age">Enter the age of the person u want to add</label>
        <input
                type="text"
                name="ajoutage"
                class="form-control"
                id="exampleajout"
                placeholder="the age of the person"
        <label for="section">Enter the study field of the person u want to add</label>
        <input
                type="text"
                name="ajoutsection"
                class="form-control"
                id="exampleajout"
                placeholder="the study field of the person"
    </div>
    <button type="submit" class="btn btn-primary">ajouter</button>
  </form>
</div>
</body>
</html>
