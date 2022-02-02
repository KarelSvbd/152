<?php
    $contenuPost = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);

    if (isset($_POST['btnImage'])) {
        
    }
    else if (isset($_POST['btnSmiley'])) {
        
    }
    else if (isset($_POST['btnPosition'])) {
        
    }
    else if (isset($_POST['btnFichier'])) {
        
    }
    else if (isset($_POST['btnPostBoost'])) {
        
    }
    else if (isset($_POST['btnPublish'])) {
        
    }

    

    require("views/post.php");

?>