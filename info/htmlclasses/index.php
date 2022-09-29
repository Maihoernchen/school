<!DOCTYPE html>

<html lang="en">

<head>

  <title>Index</title>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <meta name="description" content="" />

</head>

<body>
    <form method="POST">
        <input id="element" name="element" value="<?php echo $_POST['element'] ?>">
        <input type="submit" name="sb" value="Les Go">
    <?php
        require './HtmlElement.php';
        $ret = $_POST['element'];
        $obj = new HtmlElement($ret);
        echo '<hr> das hab icke';
        print_r($obj->render());
    ?>
    </form>
</body>

</html>