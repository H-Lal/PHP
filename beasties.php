<?php

if (isset($_GET["doge"])){
    echo '<img src="img/doge.jpg" alt="icon" />';
}
if (isset($_GET["cate"])){
    echo '<img src="img/cate.jpg" alt="icon" />';
}
if (isset($_GET["snek"])){
    echo '<img src="img/snek.jpg" alt="icon" />';
}
if (isset($_GET["goku"])){
    echo '<img src="img/goku.jpg" alt="icon" />';
}
if (isset($_GET["banana"])){
    echo '<img src="img/banana.png" alt="icon" />';
}
if (isset($_GET["koala"])){
    echo '<img src="img/koala.jpg" alt="icon" />';
}
if(!isset($_GET)){
    echo "kies A.U.B. een Army!";
}
?>