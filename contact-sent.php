<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo " ziņa tika nosūtīta ";
    echo " jūsu vārds- ";
    echo $_POST["name"];

    echo " jūsu epasts- ";
    echo $_POST["email"];

    echo " tava ziņa- ";
    echo $_POST["message"];

    ?>
</body>
</html>