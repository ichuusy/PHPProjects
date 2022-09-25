<?php

$data = array("ichuusy" => 1, "solita" => 2);
echo "Ichuusy : ".$data["ichuusy"];
echo "<br>";
echo "Solita : ".$data["solita"];
echo "<br><br><br><br><br><br>";
$numbers = array(10,15,30,50,20,70,100);

for ($i=0; $i < count($numbers) ; $i++) 
{ 
    echo "Sayı : $numbers[$i]<br>";
}
echo "<br><br><br>"; 
foreach ($data as $key => $value)
{
    echo "Sıralama : $value Kullanıcı : $key";
    echo "<br>";
}
echo "<br><br><br>";

for ($i=0; $i < count($numbers) ; $i++) 
{ 
    if ($numbers[$i] == 70) 
    {
        echo "Sayı bulundu, bulunan sayı : $numbers[$i]";
        break;;
        
    }
}

?>
