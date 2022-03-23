<?php
    $contenuPost = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);
    //constante valeur maximale
    define("MAXFILESIZE", 3 * 1024);


    require("models/postModel.php");

    $valeur = "";
    if ($_FILES['userfile']['name'] !=""){
        envoieNouveauPost($contenuPost);
        // Where the file is going to be stored
        for($i = 0; $i < count($_FILES['userfile']['name']); $i++){
            
    var_dump($_FILES['userfile']['name']);
            $target_dir = "assets/uploads/";
            $file = $_FILES['userfile']['name'][$i];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['userfile']['tmp_name'][$i];
            
            $path_filename_ext = $target_dir.$filename.".".$ext;
            
            if($ext == "png" || $ext == "jpg" || $ext == "jfif" || $ext == "mp4" || $ext == "mp3"){
                $idUnique = uniqid();
                $nomUnique = $target_dir . $idUnique . "." . $ext;
                //rename($temp_name, $nomUnique);
                move_uploaded_file($temp_name,$path_filename_ext);
                if(rename($path_filename_ext, $nomUnique)){
                    //Envoie du post et du media dans la base de données
                    if(envoieNouveauMedia($ext, $idUnique, recuperationDernierPost()[0][0])){
                        $valeur = "Le fichier a été envoyé avec succès";
                    }
                    else{
                        error_log("Erreur lors de l'envoie du media");
                    }
                }
                else
                {
                    error_log("erreur lors du rename");
                }
                
            }
        }
         
        
    }

    $commentaire = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);
    
    require("views/post.php");

?>