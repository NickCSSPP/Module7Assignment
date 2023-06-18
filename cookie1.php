<?php
    $cookie_name = "user";
    $cookie_value = "Nick Surgent";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");

?>
<html>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "There is no cookie for " . $cookie_name;
        } else {
            echo "Cookie '" . $cookie_name . "' has been created.<br>";
            echo "Name of user: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>