<?php
    session_start();
    
    require("views/inc/header.php");

    require("models/monPDO.php");

    //require("classes/Media.php");
    //require("classes/Post.php");


    switch ($_GET["page"]) {
        case "home":
            require("controllers/main-controller.php");
            break;
        case "post":
            require("controllers/post-controller.php");
            
            break;
        case "modifyPost":
            require("controllers/modifyPost-controller.php");
            break;
        default:
            require("views/main.php");
            break;
    }
    
    require("views/inc/footer.php");
?>