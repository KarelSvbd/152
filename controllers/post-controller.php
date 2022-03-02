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
    envoieNouveauPost("test");
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
                $nomUnique = $target_dir + uniqid()+ "." + $ext;
                var_dump($nomUnique);
                //rename($temp_name, $nomUnique);
                move_uploaded_file($temp_name,$path_filename_ext);
                if(rename($path_filename_ext, $nomUnique)){
                    var_dump($nomUnique);
                }
                else
                {
                    var_dump("non");
                }
                    $valeur = "Le fichier a été envoyé avec succès";
                    
                    //createPost($filename, $contenuPost);
                    envoieNouveauMedia($ext, $filename, recuperationDernierPost()[0][0]);
                }
                else{
                    $valeur = "Ce type de fichier n'est pas prit en charge";
                }
            }
            
    }

    $commentaire = filter_input(INPUT_POST, 'contenuPost', FILTER_SANITIZE_STRING);
    require("views/post.php");

?>