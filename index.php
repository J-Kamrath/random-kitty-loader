<?php
include 'apicall.php';

if (isset($_POST['run'])) {
    $data = fetch_cat_image(); // neues Katzenbild
} else {
    $data = fetch_cat_image(); // erstes Laden
}

$fact = fetch_cat_fact();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div id="flex_box">
        <div id=image_container>
            <img src="<?= $data["url"] ?>" id="img_container">
            <h1>Little Kitties 🐱</h1>
            <form method="post">
                <button type="submit" name="run" value="1">
                    Show more Kitties! 🐱
                </button>
            </form>
        </div>
        <div id="text_container">
            <h2>🐱Fact of the day🐱</h2> <br>
            <?= $fact["fact"] ?>
        </div>
    </div>


</body>

</html>