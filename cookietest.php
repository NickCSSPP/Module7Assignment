<?php
    $cookie_name = "user";
    $cookie_value = "Nick Surgent";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");

?>
<html>
<body>
    <?php
        if(isset($_COOKIE['user'])) {
            echo "There already is a cookie for this user.";
        } else {
            echo "The cookie for this user has been deleted.";
        }
    ?>
</body>
</html>