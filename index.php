<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="basketball" value="Basketball">Basketball<br><!--name is key value is value-->

        <input type="checkbox" name="soccer" value="Soccer">Soccer<br>

        <input type="submit" name="submit">

</body>

</html>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["basketball"])) {
        echo "You love basketball<br>";
    }
    if (isset($_POST["soccer"])) {
        echo "You love soccer<br>";
    }
    if (empty($_POST["basketball"])) {
        echo "You don't love basketball<br>";
    }
    if (empty($_POST["soccer"])) {
        echo "You don't love soccer<br>";
    }
}
