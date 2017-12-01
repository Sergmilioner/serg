


<?php
     if(isset($_POST["send"])) //проверка нажата ли кнопка отправить
     {
         $from= htmlspecialchars($_POST["from"]);// обработаем html код , который не будет обрабатыватся
         $to= htmlspecialchars($_POST["to"]);
         $subject= htmlspecialchars($_POST["file"]);
         $_SESSION["from"]=$from;
         $error_from = "";
         if($from ==""||preg_match("/@/",$from)){
             $error_from ="Ваша заявка не принята";
             $error = true;
         }
     }
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Обратная связь</title>
</head>
<body>
<h2>Форма обратной связи</h2>
<form name="feedback" action=""method="post">
    <p>
        Email:<input type="text" name="from" value="<?php echo $_SESSION["from"]?>"/>
        <span style="color:red"><?=$error_from?></span>
    </p>
    <p>
        Text:<input type="text"  name="to"/>

    </p>
        File:<input type="file"name="file">
    <p>
        <button type="submit" name="send" value="отправить">Отправить</button>
    </p>
</form>
</body>
</html>
