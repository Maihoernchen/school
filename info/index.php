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
        <input id="el" name="el" value="<?php echo $rett ?>">
        <input type="submit" name="sb" value="Les Go">
    <?php
        require './HtmlList.php';
        $ret = $_POST['element'];
        $rett = array('duck','doubleduck','tripleduck');
        $obj = new HtmlList($ret,$rett);
        $obj->setListType('cl');
        echo '<hr> das hab icke';
        print_r($obj->render());
    ?>
    </form>
</body>

</html>