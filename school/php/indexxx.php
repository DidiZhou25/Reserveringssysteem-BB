<?php
//phpinfo();

for($i = 0; $i < 5; $i ++)
{echo $i;
}

$j = 10;
while($j > 0){
    $j--;

    $numbers = [1, 2, 3, 4, 5];

    for ($i = 0; $i < count ($numbers); $i++) {
            echo $numbers [$i];
    }

}  foreach ($numbers as $number) {
    echo $number;
}

