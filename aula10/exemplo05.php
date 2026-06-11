<?php
    //  //forma errada, pontas soltas,  vamos tentar com suitcase 
    // function msg($periodo){
    //     if ($periodo == "manhã") {
    //         echo"bom dia";
    //     } else {
    //         if ($periodo == "tarde") {
    //             echo"boa tarde";
    //         } else {
    //             if ($periodo == "noite") {
    //                 echo"boa noite";
    //             } else {
    //                 echo"invalido";
    //             }
    //             ;
    //         }
    //     }

    //     ;
    // }
    // msg("abacaxi");
    function msg($periodo){
    switch ($periodo) {
        case 'manhã':
            echo"bom dia";
            break;
        
        case 'tarde':
            echo"boa tarde";
            break;
        
        case 'noite':
            echo"boa noite";
            break;
        
        default:
            echo"invalido";
            break;
    }
    }

     msg("tarde");
?>