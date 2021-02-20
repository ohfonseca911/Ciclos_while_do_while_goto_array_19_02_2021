<?php

    //CICLO WHILE - EJEMPLO 1
    $papitas = (int) 10;
    while($papitas){
        if($papitas<=10){ 
            $papitas--;
            $cadena = (string) <<<FIN
        Me comi $papitas <br> 
FIN;
        print_r($cadena);
            continue;
        }
    }

    //CICLO WHILE - EJEMPLO 2
    $papitas = (int) 10;
    while(true){
        if($papitas==0){
        break;
    }
    $cadena = (string) <<<FIN
    Me comi $papitas <br>
FIN;
        print_r($cadena);
        $papitas--;
    }

    //CICLO WHILE - EJEMPLO 3
    $papitas = (int) 11;
    llamar:
    $papitas--;
    hile($papitas){
        $cadena = (string) <<<FIN
        Me comi $papitas <br>
FIN;
        print_r($cadena);
        goto llamar;
    }

    //CICLO WHILE - EJEMPLO 4
    $papitas = 10;
    while($papitas==true){
        $papitas--;
        $cadena = (string) <<<FIN
        Me comi $papitas <br>
FIN;
        print_r($cadena);
    }

    //CICLO FOR
    $lista = (array) ["Programar",23, true,"Disney", function(){ return 'Hola mundo :V';}];

    $lista2 = (array) ['Pasatiempo1' => "Programar", 'Programar' => "Amazon Play", 'saludar' => function(){ return 'Hola mundo :V';} ];

    for ($i=0; $i < count($lista); $i++) { 
        if(gettype($lista[$i])=="object"){
            echo $lista[$i]();
        }
    }

    //CICLO FOR-EACH
    foreach ($lista as $key => $value) {
        if(gettype($value)=="object"){
            echo $value();
        }
    }
?>