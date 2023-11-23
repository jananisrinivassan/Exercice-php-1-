<?php
    //echo phpversion();
    //echo phpinfo();
    $nom = "Janani";
    //$text = 'Je m\'appelle';
    $texte = "Je m'appelle";
    $age = 53;
    $jour = date("d - m - y");
    //echo "nom du formateur : ".$nom."<br>";
    //echo "<br>";
    //echo "Age de formateur :" .$age." ans";
?>
<h1> Nom du formateur : <?php echo $nom ?></h1> 
<h2> Date = <?php echo $jour ?></p></h2>
<p> Age = <?php echo $age  ?> ans </p>
<?php
define("PI", 3.1415);
// echo PI ."<br>";
// echo M_PI."<br>";
// echo pi();
define("TVA", 0.2);
$prix_ht = 10;
$prix_ttc = $prix_ht + ($prix_ht * TVA);
?>
<p>Prix TTC = <?php echo $prix_ttc ?>£</p>