<?php

    session_start();

    $_SESSION["firstname"] = "Nick";
    $_SESSION["lastname"] = "Surgent";
?>
<html>
<body>
    <?php
        echo "First Name: " . $_SESSION["firstname"] . "<br>";
        echo "Last Name: " . $_SESSION["lastname"];
    ?>
</body>
</html>
