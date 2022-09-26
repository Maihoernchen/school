<?php
echo '<!DOCTYPE html>

<html lang="en">

<head>

  <title>Index</title>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <meta name="description" content="" />

</head>

<body>
    <form method="POST">
        <input id="element" name="element" value="hr">
        <input type="submit" name="sb" value="Les Go">';
    require './HtmlElement.php';
    $obj = new HtmlElement($_POST);
    $obj->render();
    echo $_POST;
echo '
    </form>
</body>

</html>';
?>