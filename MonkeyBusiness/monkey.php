<?php
$Monkeys = array("Baviaan", "Guereza", "Langoer", "Neusaap",  "Tamarin", "Brulaap","Halfaap", "Mandrill", "Oeakari","Faunaap","Hoelman","Meerkat","Oormaki", "Gorilla", "Kuifaap", "Mensaap","Spinaap");

//$ao = new AapOverzicht();
//$ao->voegAapToe(new Aap("Baviaan"));
//$ao->voegAapToe(new Aap("Guereza"));
//$ao->voegAapToe(new Aap("Langoer"));
//$ao->voegAapToe(new Aap("Neusaap"));
//$ao->voegAapToe(new Aap("Tamarin"));
//$ao->voegAapToe(new Aap("Brulaap"));
//$ao->voegAapToe(new Aap("Halfaap"));
//$ao->voegAapToe(new Aap("Mandril"));
//$ao->voegAapToe(new Aap("Oeakari"));
//$ao->voegAapToe(new Aap("Faunaap"));
//$ao->voegAapToe(new Aap("Hoelman"));
//$ao->voegAapToe(new Aap("Meerkat"));
//$ao->voegAapToe(new Aap("Oormaki"));
//$ao->voegAapToe(new Aap("Gorilla"));
//$ao->voegAapToe(new Aap("Kuifaap"));
//$ao->voegAapToe(new Aap("Mensaap"));
//$ao->voegAapToe(new Aap("Spinaap"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="monkey.css">
</head>
<body>

<img src="monkey-business.jpg" alt="monkey">
<hr>
<h1>Select your Monkey</h1>
<hr>
<img src="monkey_swings.png" alt="monkey">
<?php
asort($Monkeys);

    foreach($Monkeys as $monkey) {
        echo  "<h2><a href='https://www.google.nl/search?q=$monkey&source=lnms&tbm=isch&sa=X&ved=0ahUKEwia6Zj0otLXAhXDKcAKHQ19CV8Q_AUICigB&biw=1920&bih=984'>$monkey</a></h2>";

    }
 ?>
<hr>
</body>
</html>

