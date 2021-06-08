<?php
    $miasta= file_get_contents('C:\xampp\htdocs\cities.json', true);
    $dekodowanie= json_decode($miasta);
    $wynik=array();
    $slowo= htmlspecialchars($_GET["name"]);
    foreach ($dekodowanie as $value)
    {
        if (is_numeric(stripos($value->name, $slowo)))
        {
            array_push($wynik, $value);
        }
    }
    
    $lista= json_encode($wynik);
    echo $lista;
?>
