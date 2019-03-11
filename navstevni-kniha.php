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
    Jméno: <input type="text"name="firstName"><br>
    Heslo: <input type="password"name="secret"><br>
    <input type="submit"><br>
        <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea>
        <br>
        <input type="submit">
    </form>
    <?php
    var_dump($_POST);
    ?>

</div>
</body>
</html>
