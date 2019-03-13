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
        <div class="form-group">
            <label for="jmeno">Jmeno:</label>
            <br><input type="text" id="jmeno" name="Jmeno"">
        </div>
        <div class="form-group">
            <label for="vzkaz">Vzkaz</label>
            <br><textarea type = "Vzkaz" name="message" id="vzkaz" rows="3" cols="30"></textarea>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Vložit</button>
    </form>

    <?php
    $handle = fopen("prispevky.txt",  "r");
    if ($handle === false) {
        echo "File cannot be opened";
    }   else {
        $text = fread($handle, 1000);
        $asArray = explode("|", $text);
        $poradi = sizeof($asArray) - 2;
        for ($i = $poradi; $i >= 0; $i--) {
            $bolding = explode(":", $asArray[$i]);
            echo "<b>" . $bolding[0] . "</b>" . "<br/>" . $bolding[1] . "<br/>";
        }

        

    }


    ?>

</div>
</body>
</html>
