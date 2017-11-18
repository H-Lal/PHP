<?php

if (isset($_GET["doge"])){
    echo '<img src="doge.jpg" alt="icon" />';
}
if (isset($_GET["cate"])){
    echo '<img src="cate.jpg" alt="icon" />';
}
if (isset($_GET["snek"])){
    echo '<img src="snek.jpg" alt="icon" />';
}
if (isset($_GET["goku"])){
    echo '<img src="goku.jpg" alt="icon" />';
}
if (isset($_GET["banana"])){
    echo '<img src="banana.png" alt="icon" />';
}
if (isset($_GET["koala"])){
    echo '<img src="koala.jpg" alt="icon" />';
}
if(!isset($_GET)){
    echo "kies A.U.B. een Army!";
}
?>