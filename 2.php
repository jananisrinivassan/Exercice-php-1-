<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IF - ELSE</title>
</head>
<body>
    <h1>IF - ELSE</h1>
    <?php
    $nom = strtoupper("Janani");
    // if($nom === "Janani")
    // {
    //     echo "Bienvenue ". $nom;
    // }
    // else
    // {
    //     echo "Erreur de nom".$nom;
    // }
    ?>
    <?php
    if($nom === "Janani"){
    ?>
    <h2>Bienvenue</h2>
    <?php
    }else{
    ?>
    <p>Erreur de nom</p>
    <?php } 
    ?>

</body>
</html