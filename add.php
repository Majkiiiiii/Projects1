<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleUno.css" rel="stylesheet">
    <title>Dodawanie Piosenki</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<div class="header">
    <div class="menuButton">
            <div class="m1" onclick="displayMenu()"></div>
            <div class="m1" onclick="displayMenu()"></div>
            <div class="m1" onclick="displayMenu()"></div>
    </div>
    <div class="headerBox">
        <h1>Add The Song</h1>
    </div>

</div>
<div class="main">
    <div id="menu"></div> 
       
    <div class="Overlay" onclick="displayMenu()"> 
        <a href="main.html" target="_blank"><input type="button" id="newMelody" name="newMelody"  value="Powrót na strone główną"></a>
        <br>
        <a href="guess.html" target="_blank"><input type="button" id="guess" name="guess"  value="Zgaduj piosenkę"></a>
    </div>
    
    <div class="mainBox">
     <h1>Dodawanie piosenki</h1>
     <p>wypełnij poniższy formularz aby dodać piosenkę</p>
        <br>
        <input type="text" id="wykonawca" name="wykonawca" value="Podaj wykonawce">
        <br>
        <input type="text" id="nazwa" name="nazwe" value="Podaj tytuł">
        <br>
        <input type="text" id="rok" name="rok" value="Podaj rok wydania">
        <br>
        <input type="text" id="link" name="link" value="Podaj link">
        <br>
        <p>Aby dodać piosenkę, kliknij w przycisk
            <br>
            |
            <br>
            |
            <br>
            \/
        </p>
        <br>
        <input type="submit" id="end" name="end" value="Dodaj Piosenkę">
    </div>   
    <?php
include_once 'db.php';
if(isset($_POST['end']))
{    
     $wykonawca = $_POST['wykonawca'];
     $tytul = $_POST['nazwa'];
     $rok = $_POST['rok'];
     $link=$_POST['link'];
     $sql = "INSERT INTO piosenki (wykonawca,tytul,rok,link)
     VALUES ('$tytul','$wykonawca','$rok','$link')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
</div>
<script src="script.js"></script>
</body>
</html>