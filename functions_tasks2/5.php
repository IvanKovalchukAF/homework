<?php
function isPalindrome($b) {
        $a = str_split($b);
        $arrClean = ' ';
        foreach ($a as $v) {
            if ($v != " " && $v != "," && $v != "!" && $v != "-" && $v != ".") {
                $arrClean = $arrClean . $v ;
            }
        }
        $arrReverse = strrev($arrClean);
        if(strcasecmp($arrClean, $arrReverse) == 0) {
            return 'Palindrome';
        }
    return 'Not Palindrome' ;
}

echo isPalindrome('A man, a plan, a cat, a ham, a yak, a yam, a hat, a canal-Panama!') ;
