<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <title>Document</title>
</head>
<body>
<h1>alooo</h1>
<table class="table">
    <tr>
        <th>carachtere:</th>
        <th>nbre occurance:</th>
    </tr>
    <?php
    function solve(string $s){
    $aa=count_chars($s,1);
    foreach($aa as $i=> $s){
          ?>
    <tr>
    <td><?= chr($i) ?></td>
    <td><?= $s ?></td>
    </tr>
    <?php }}
    solve("Bonjoue GL2 on est entrain de faire du PHP et c'est cool :)")
     ?>
</table>

</body>

</html>
