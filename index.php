<?php
$array = [4,5,6,72,432,565];
asort($array);
var_dump($array);
//foreach($array as $key =>$val) {
//    echo "$key = $val"."</br>";
//}

drer
//
//$file = 'people.txt';
//// Новый человек, которого нужно добавить в файл
//$person = "абрадака\n";
//// Пишем содержимое в файл,
//// используя флаг FILE_APPEND flag для дописывания содержимого в конец файла
//// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
//file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
//$f = file_get_contents($file);
//echo ($f);
$fileName = 'example.txt';
$fileData = 'Some text';
$rights = 'w';

if(filePutContents($fileName, $fileData, $rights)){
    echo "Seve complete";
} else {
    echo "Seve filet";
}
/**
 * Some desk
 *
 * @param $fileName
 * @param $fileData
 * @param $rights
 * @return bool
 */
function filePutContents($fileName, $fileData, $rights)
{
    $fp = fopen($fileName, $rights);
    fwrite($fp, $fileData);
    fclose($fp);
    return true;
}


//$text = "wererrweee";
//$fp = fopen("file.txt","a");
// fwrite($fp,$text);
// fclose($fp);
?>


