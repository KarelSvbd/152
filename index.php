<?php
    
    require("views/inc/header.php");

    switch ($_GET["page"]) {
        case "home":
            require("views/main.php");
            break;
        case "post":
            echo "i égal 1";
            break;
        default:
            require("views/main.php");
            break;
    }
    
    require("views/inc/footer.php");
?>