<?php

    if(!isset($_COOKIE['counter']))
    
    setcookie('counter',0);

    else
    {
        $pgaccess=$_COOKIE['counter'];
        setcookie('counter',++$pgaccess);
    }
    echo "Page is viewed".$_COOKIE['counter']."times";
?>