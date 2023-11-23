<?php
for($num=2;$num<=50;$num=$num+2)
{
    echo $num."<br>"; 
}
for( $row = 1; $row < 10; $row++ )
{
    for( $col = 1; $col <=$row; $col++ )
    {
        echo "*";
    }
    echo "<br>";
}
// for($table=1; $table<=10;$table++)
// {
//     echo "Table = ".$table."<br>";
//     for($line=1; $line<=12;$line++)
//     {
//         echo $table." * ".$line." = ".$table*$line."<br>";
//     }
//     echo "<br>";
// }