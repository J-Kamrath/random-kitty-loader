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
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div id=main_container>
        <img src="<?= $data["url"] ?>" width="500px" id="img_container">
        <h1>Little Kitties</h1>
        <form method="post">
            <button type="submit" name="run" value="1">
                Show more Kitties!
            </button>
        </form>
    </div>

</body>

</html>