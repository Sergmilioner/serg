
<?php
$q = array(2, 5, -9, 7, -6, 1, 2, -45, 463, -26, 18, 16, -16,-100,-200);
$fl=true;
while ($fl)
{
    $fl=false;
    for ($i = 0; $i < count($q) - 1; $i++) {
        if ($q[$i] > $q[$i + 1]) {
            $vr = $q[$i];
            $q[$i] = $q[$i + 1];
            $q[$i + 1] = $vr;
            $fl=true;

        }
    }
}
var_dump($q);
?>

