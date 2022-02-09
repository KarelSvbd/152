<?php
    $contenuPost = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);

    

    require("models/postModel.php");

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

    if (($_FILES['userfile']['name']!="")){
        // Where the file is going to be stored
            $target_dir = "assets/uploads/";
            $file = $_FILES['userfile']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['userfile']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
         
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
         $valeur =  "Sorry, file already exists.";
         }else{
         move_uploaded_file($temp_name,$path_filename_ext);
         $valeur = "Congratulations! File Uploaded Successfully.";
         }
    }

    $commentaire = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);

    

    require("views/post.php");

?>