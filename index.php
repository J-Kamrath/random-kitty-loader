<?php
include 'apicall.php';

if (isset($_POST['run'])) {
    $data = fetch_cat_image(); // neues Katzenbild
} else {
    $data = fetch_cat_image(); // erstes Laden
}
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum asperiores ipsum facere magna Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora illum, quaerat omnis fugit facere, in doloremque fugiat eveniet totam exercitationem debitis alias at ipsa rerum minus aperiam! Rem, neque adipisci.
        </div>
    </div>


</body>

</html>