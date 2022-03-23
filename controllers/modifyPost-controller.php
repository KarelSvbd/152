<?php
    require("models/postModel.php");

    switch($_GET["alterPost"]){
        case "modify":
            //recuperationMediaPost($post["idPost"])[0]["typeMedia"], "assets/uploads/" . recuperationMediaPost($post["idPost"])[0]["nomMedia"] . "." .  recuperationMediaPost($post["idPost"])[0]["typeMedia"]
    $idPost = $_GET["id"];
    alterPostForm($idPost, recuperationMediaPost($idPost)[0]["typeMedia"], "assets/uploads/" . recuperationMediaPost($idPost)[0]["nomMedia"] . "." .  recuperationMediaPost($idPost)[0]["typeMedia"], "ä implémenter");

    function alterPostForm($idPost ,$typeMedia, $lienMedia, $description){
        echo '<div class="container formPost">
            <form method="POST" action="#" enctype="multipart/form-data" >
            ';
            switch($typeMedia){
                case "mp4":
                    echo "<video controls autoplay loop mute height=100 style='float:left; '><source src='".$lienMedia."' type='video/mp4'></video>";
                    break;
                case "mp3":
                    echo "<audio controls src='".$lienMedia."' width=100 style='float:left;width:80%;margin-top: 45px; margin-left:5%;'>";
                    break;
                default:
                    echo  "<img src='".$lienMedia."' height=100 style='float:left'>";
                            
            }
            '
            <input type="text" class="contenuPost" name="contenuPost" value="'.$description.'"/>
            <div class="containerAvecIcon">
                <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-picture btnAvecIcon" accept="image/png, image/jpeg*"/>
                <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-music btnAvecIcon" accept=".mp3*">
                <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-facetime-video btnAvecIcon" accept="video/mp4"/>
        </div>
        <div class="containerBtnPost">
            <button type="submit" class="btnPublish btn" name="btnPublish">
                Publish
            </button>
        </div>
        <?php
        print_r($valeur);
        
        ?>
        

        </form>
    </div>';

    }
    
    require("views/modifyPost.php");
            break;
        case "delete":
            if(supprimerPost($_GET["id"])){
                require("views/deletePost.php");
            }
            
            break;
        default:
    }

    
?>