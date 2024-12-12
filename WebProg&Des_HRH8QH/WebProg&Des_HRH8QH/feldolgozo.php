<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST)) {

    echo "<h2>Űrlap adatok</h2>";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $satisfaction = $_POST["satisfaction"];
    $opinion = $_POST["opinion"];
    $color = $_POST["favorite_color"];
    $date = $_POST["birthdate"];
    $victim = $_POST["victim"];

    echo "<p><strong>Keresztnév:</strong> " . $firstname . "</p>";
    echo "<p><strong>Vezetéknlv:</strong> " . $lastname . "</p>";
    echo "<p><strong>Elégedettség:</strong> " . $satisfaction . "</p>";
    echo "<p><strong>Tapasztalatai:</strong> " . $opinion . "</p>";
    echo "<p><strong>Kedvenc Szín:</strong> " . $color . "</p>";
    echo "<p><strong>Születési dátum:</strong> " . $date . "</p>";
    echo "<p><strong>Volt már fakenews áldozata?:</strong> " . $victim . "</p>";

} else {
    echo "<h2>Űrlap nem lett beküldve!</h2>";
}
?>

<a href="HRH8QH_beadando.html">Vissza az oldalra.</a>
</body>
</html>