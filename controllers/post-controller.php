<?php
    $contenuPost = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);
    //constante valeur maximale
    define("MAXFILESIZE", 3 * 1024);


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
    if ($_FILES['userfile']['name'] !=""){
        // Where the file is going to be stored
        for($i = 0; $i < count($_FILES['userfile']['name']); $i++){
            $target_dir = "assets/uploads/";
            $file = $_FILES['userfile']['name'][$i];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['userfile']['tmp_name'][$i];
            
            $path_filename_ext = $target_dir.$filename.".".$ext;
            
            if($ext == "png" || $ext == "jpg" || $ext == "jfif"){
                $idUnique = uniqid();
                $nomUnique = $target_dir . $idUnique . "." . $ext;
                //rename($temp_name, $nomUnique);
                move_uploaded_file($temp_name,$path_filename_ext);
                if(rename($path_filename_ext, $nomUnique)){
                    //Envoie du post et du media dans la base de données
                    if(envoieNouveauPost($contenuPost) && envoieNouveauMedia($ext, $idUnique, recuperationDernierPost()[0][0])){
                        $valeur = "Le fichier a été envoyé avec succès";
                    }
                    else{
                        error_log("Erreur lors de l'envoie du media");
                        var_dump("Erreur lors de l'envoie du media");
                    }
                }
                else
                {
                    error_log("erreur lors du rename");
                }
                
            }
            else{
                $valeur = "Ce type de fichier n'est pas prit en charge";
            }
        }
            
    }
    if($_FILES['uservideo'] !=""){
        var_dump("video ok");
    }
    else{
        var_dump("video ko");
    }

    $commentaire = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);
    require("views/post.php");

?>