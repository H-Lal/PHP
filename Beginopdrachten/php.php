<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous" />
<link rel="stylesheet" href="css.css"/>

<head>
    <meta charset="utf-8" />
    <title>Busreis</title>
</head>

<body>
<nav class="navbar">
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand">CODE-X</a>
    </div>
    <!--Navbar-header-->
    <p class="navbar-text">
        Lekker "Studeren"!!!
    </p>
    <ul class="nav navbar-nav">
        <li><a href="php/Welcome.php">PHP</a></li>
        <li><a href="">CODE-X</a></li>
        <li><a href="https://roosters.xedule.nl/Attendee/ScheduleCurrent/84753?Code=MMVAOO7B&attId=1&OreId=84">Rooster</a></li>
    </ul>
</nav>
<form name="myform" action="" method="POST">
<div align="center">
<br><br>
<p>Your age: <input type="text" name="age" /></p>

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
<p>You are <?php echo (int)$_POST['age']; ?> years old.</p>
<br><br>
</body>
</html>




<?php
$bool = -1; echo "de waarde is" . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";
$bool = 0; echo "de waarde is " . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";
$bool = 327; echo "de waarde is " . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";
$bool = TRUE; echo "de waarde is " . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";
$bool = FALSE; echo "de waarde is " . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";
$bool = NULL; echo "de waarde is " . $bool;
echo $bool ? " het is waar <br>" : "het is niet waar <br>";

    ?>