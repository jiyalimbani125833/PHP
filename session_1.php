<?php

//Staring the session
session_start();
?>

<html>
    <body>
        <!--After Login Process -->
        <?php
        $_SESSION['username'] = "Jiya";
        echo "session created";
        //it generates a cookie
        ?>
    </body>
</html>