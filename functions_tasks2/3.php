<?php
function codingText($getArray) {
    $array = str_split($getArray);
    $arrAlphabet = [
        'a' => 'b',     'b' => 'c',     'c' => 'd',     'd' => 'e',
        'e' => 'f',     'f' => 'g',     'g' => 'h',     'h' => 'i',
        'i' => 'j',     'j' => 'k',     'k' => 'l',     'l' => 'm',
        'm' => 'n',     'n' => 'o',     'o' => 'p',     'p' => 'q',
        'q' => 'r',     'r' => 's',     's' => 't',     't' => 'u',
        'u' => 'v',     'v' => 'w',     'w' => 'x',     'x' => 'y',
        'y' => 'z',     'z' => 'a',     ' ' => ' '
    ];
    $arResult = '';
    foreach ($array as $v ) {
        if (isset($arrAlphabet[$v])) {
            $arResult = $arResult . $arrAlphabet[$v];
        }
    }
    return $arResult;
}



function deCodingText($a) {
    $array = str_split($a);
    $arrAlphabet2 = [
        'a' => 'b',     'b' => 'c',     'c' => 'd',     'd' => 'e',
        'e' => 'f',     'f' => 'g',     'g' => 'h',     'h' => 'i',
        'i' => 'j',     'j' => 'k',     'k' => 'l',     'l' => 'm',
        'm' => 'n',     'n' => 'o',     'o' => 'p',     'p' => 'q',
        'q' => 'r',     'r' => 's',     's' => 't',     't' => 'u',
        'u' => 'v',     'v' => 'w',     'w' => 'x',     'x' => 'y',
        'y' => 'z',     'z' => 'a',     ' ' => ' '
    ];
    $BackAlphabet = array_flip($arrAlphabet2);
    $arResult = '';
    foreach ($array as $v ) {
        if (isset($BackAlphabet[$v])) {
            $arResult = $arResult . $BackAlphabet[$v];
        }
    }
    return $arResult;
}

$wordCoding = 'if a value has several occurrences the latest key will be used as its value and all others will be lost';
$deCoding = 'jg b wbmvf ibt tfwfsbm pddvssfodft uif mbuftu lfz xjmm cf vtfe bt jut wbmvf boe bmm puifst xjmm cf mptu';
echo codingText($wordCoding);
echo '<br>';
echo deCodingText($deCoding);
