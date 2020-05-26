<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
       body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
        <div class="form-group">
            <label>Ime</label>
            <input type="text" name="ime" class="form-control">
        </div>
        <div class="form-group">
            <label>Prezime</label>
            <input type="text" name="prezime" class="form-control">
        </div>
        <div class="form-group" <?php if($_SESSION["razina"]=="korisnik") echo "hidden"?>>
            <label>Slika</label>
            <input type="file" name="slika" class="form-control">
        </div>
        <div class="form-group" <?php if($_SESSION["razina"]=="korisnik") echo "hidden"?>>
            <label>Spol</label> <br>
            <input type="radio" name="spol" value="musko">Muško <br>
            <input type="radio" name="spol" value="zensko">Žensko 
        </div>
        <div class="form-group">
            <label>Datum Rođenja</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Promjeni">
        </div>
    </form>
</div>
</body>
</html>