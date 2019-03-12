<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">



    <form action="vlozit.php" method = "post">
    Jméno: <input type="Jmeno"name="firstName"><br>
    Vzkaz: <textarea type = "Vzkaz" name="message" rows="10" cols="30">The cat was playing in the garden.</textarea>
        <br>
        <input type="submit">
    </form>
    <?php
    $handle = fopen("prispevky.txt",  "r");
    if ($handle === false) {
        echo "File cannot be opened";
    }   else {
        $text = fread($handle, 1000);
        $asArray = explode("|", $text);
        $poradi = sizeof($asArray) - 1;
        for ($i = $poradi; $i >= 0; $i--) {
            $bolding = explode(":", $asArray[$i]);
            echo "<b>" . $bolding[0] . "</b>" . $bolding[1] . "<br/>";
        }

        

    }


    ?>

</div>
</body>
</html>
