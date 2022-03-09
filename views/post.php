<?php
    //position des images
    //https://www.php.net/manual/fr/features.file-upload.post-method.php
    //print_r($_FILES['userfile']);

    

    /*$uploaddir = 'assets/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé
            avec succès. Voici plus d'informations :\n";
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
    }

    echo 'Voici quelques informations de débogage :';

    echo '</pre>';*/


    //$valeur = $_FILES['userfile']['name'];
?>
<div class="container formPost">
    <form method="POST" action="#" enctype="multipart/form-data" >
        <img src="assets/img/logoCFPT.png" class="imgProfilPost"/>
        <input type="text" class="contenuPost" name="contenuPost" placeholder="Write something..."/>
        <div class="containerAvecIcon">
        
            <button type="file" class="btnAvecIcon btn" name="btnImage">
                <i class="glyphicon glyphicon-user"></i>
            </button>
            <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-picture btnAvecIcon" accept="image/png, image/jpeg">
            <button type="submit" class="btnAvecIcon btn" name="btnPosition">
                <i class="glyphicon glyphicon-map-marker"></i>
            </button>
            <input type="file" multiple name="uservideo" id="uservideo" class="glyphicon glyphicon-facetime-video" accept="video/mp4,video/x-m4v,video/*">
            </button>
        </div>
        <div class="containerBtnPost">
            <button type="submit" class="btnPostBoost btn" name="btnPostBoost">
                Post Boost
            </button>
            <button type="submit" class="btnPublish btn" name="btnPublish">
                Publish
            </button>
        </div>
        <?php
        print_r($valeur);
        
        ?>
        

    </form>
</div>
