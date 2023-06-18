<?php

    session_start();

    $_SESSION["firstname"] = "Rick";
    $_SESSION["lastname"] = "Fox";
?>
<html>
<body>
    <?php
        echo "First Name: " . $_SESSION["firstname"] . "<br>";
        echo "Last Name: " . $_SESSION["lastname"];
    ?>
</body>
</html>