<?php   
$qte = 25;
// if($qte<50) 
// {
//     echo "prix = 5£/pc";
// }
// else
// {
//     if($qte< 100)
//     {
//         echo "prix = 3£/pc";
//     }
//     else
//     {
//         echo "prix = 4£/pc";
//     }
// }
switch (true)
{
    case $qte < 50:
        echo "Prix = 5£/pc";
        break;
    case $qte < 100:
            echo "Prix = 3£/pc";
            break;
    default:
    echo "Prix = 4£/pc ";
    break;
}
?>