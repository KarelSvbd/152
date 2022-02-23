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

    echo "<div style='margin-top:100px'>test</div>";
    $valeur = "";
    if ($_FILES['userfile']['name'][1]!=""){
        var_dump("oui");
        var_dump($_FILES);
        // Where the file is going to be stored
        for($i = 0; $i < count($_FILES['userfile']['name']); $i++){
            $target_dir = "assets/uploads/";
            $file = $_FILES['userfile']['name'][$i];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['userfile']['tmp_name'][$i];
            
            $path_filename_ext = $target_dir.$filename.".".$ext;
         
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            //Le fichier existe déjà.
        }
        else{
            if($ext == "png" || $ext == "jpg" || $ext == "jfif"){
                move_uploaded_file($temp_name,$path_filename_ext);
                $valeur = " Le fichier a été envoyé avec succès";
                envoieNouveauMedia($ext, $filename, recuperationDernierPost()[0][0]);
            }
            else{
                $valeur = "Ce type de fichier n'est pas prit en charge";
            }
            
            
         }
        }
            
    }

    $commentaire = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);

    

    require("views/post.php");

?>