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
      method="get">
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
</body>
</html>
