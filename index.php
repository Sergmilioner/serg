
<?php

$a = array(5,4,6,81,127,55,111,122);
echo count($a);
// найдем количество элементов в массиве
?>
</br>
<?php
$a = array(5,4,6,8,7,-8,-2,2,45,74,94,101,-121,127,55,111,125);
for ($i=0;$i<count($a); $i++){
    if ($a[$i]>0){
        if ($a[$i]%5== 0)
            echo $a[$i].'.',"</br>";
    }

}
// выпод положительных бкратных 5
?>


