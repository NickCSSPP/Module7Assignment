<?php

    session_start();

    $_SESSION['user'] = "Nick Surgent";
    
?>
<html>
<body>
    <?php
        unset($_SESSION['user']);

        if(isset($_SESSION['user'])) {
            echo "Session for this user still exists.";
        } else {
            echo "Session for this user is deleted.";
        }
    ?>
</body>
