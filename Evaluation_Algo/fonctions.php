<?php

function Voyelles($string){
    $string = strtolower($string);
    return substr_count($string, "a") + substr_count($string, "e") + substr_count($string, "i") + substr_count($string, "o") + substr_count($string, "u") + substr_count($string, "y");  
}
function Consonnes($string){
    $string = strtolower($string);
    $consonants = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m","n", "p" , "q" , "r" , "s" , "t" , "v" , "x" , "z");
    $consonnes = 0;
    for ($i=0; $i<count($consonants); $i++){
        $consonnes += substr_count($string, $consonants[$i]);
    }
    return $consonnes;
}
function Chiffres($string){
    $numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", );
    $chiffres = 0;
    for ($i=0; $i<count($numbers); $i++){
        $chiffres += substr_count($string, $numbers[$i]);
    }
    return $chiffres;
}

function CaracSpecial($string){
    $SpecialCarac = array(" ", "/", "[", "^", "£", "$", "%", "&", "*", "(", ")", "}", "{", "@", "#", "~", "?", ">", "<", ">", ",", "|", "=", "_", "+", "-", "]", ".", ":", ";", "á", "Á", "â" ,"Â" ,"à" ,"À" ,"å" ,"Å" ,"ã" ,"Ã" ,"ä" ,"Ä" ,"æ" ,"Æ" ,"ç" ,"Ç" ,"é" ,"É" ,"ê" ,"Ê" ,"è" ,"È" ,"ë" ,"Ë" ,"í" ,"Í" ,"î" ,"Î" ,"ì" ,"Ì" ,"ï" ,"Ï" ,"ñ" ,"Ñ" ,"ó" ,"Ó" ,"ô" ,"Ô" ,"ò" ,"Ò" ,"ø" ,"Ø" ,"õ" ,"Õ" ,"ö" ,"Ö" ,"œ" ,"Œ" ,"š" , "Š", "ß", "ð", "Ð", "þ", "Þ", "ú", "Ú", "û", "Û", "ù", "Ù", "ü", "Ü", "ý", "Ý", "ÿ", "Ÿ");
    $special = 0;
    for ($i=0; $i<count($SpecialCarac); $i++){
        $special += substr_count($string, $SpecialCarac[$i]);
    }
    return $special;
}
