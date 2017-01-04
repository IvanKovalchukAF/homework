<?php
$i=1;
while($i < 10){
    $i2=1;
    while($i2 < $i){
        echo $i;
        $i2++;
    }
    echo $i . '<br>';
    $i++;
}

/*<?php
for($i = 1; $i < 10; $i++){
    for($i2 = 1; $i2 < $i; $i2++){
        echo $i;
    }
    echo $i . '<br>';
}*/