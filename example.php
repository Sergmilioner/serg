<?php
if (isset($_POST['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
    if(!empty($_FILES))
    {
        echo '<pre>';
        print_r($_FILES);
        echo '<pre>';
        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);?>
        <img src="upload/<?=$_FILES['file']['tmp_name']?>"<?php
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form method="post" action=""enctype="multipart/form-data">
         <p>
             Neme:<input type="text" name="name"value="<?=($_POST['name']) ? $_POST['name']: ""?>""
         </p>
         <p>
             Text:<textarea name="text"></textarea>
         </p>
         <p>
             <input type="file"name="file">
         </p>
         <p>
             <button type="submit" name="send" value="test">Send</button>
         </p>
     </form>
 <img src="upload/5555555555555555555555555555.png">
</body>
</html>