<?php
    require("models/postModel.php");
    function createPost($idPost ,$typeMedia, $lienMedia, $description){
        echo "<div class='poste' style='height: 150px;width: 100%;background-color: #dedede;border: 1px solid black;float: left;margin-top: 30px;'>
                <div class='containerMedia' style='height: 150px;width: 50%; float:left;'>";
        switch($typeMedia){
            case "mp4":
                echo "<video controls autoplay loop mute height=148 style='float:left; '><source src='".$lienMedia."' type='video/mp4'></video>";
                break;
            case "mp3":
                echo "<audio controls src='".$lienMedia."' width=148 style='float:left;width:80%;margin-top: 45px; margin-left:5%;'>";
                break;
            default:
                echo  "<img src='".$lienMedia."' height=148 style='float:left'>";
                        
        }
        echo "</div>
        <p style='margin: 10px;'>".$description."</p>
        </div>
                <a href='index.php?page=modifyPost&alterPost=modify&id=".$idPost."'>
                    <button type='submit' class='btnAvecIcon btn' name='btnModifier' style='background-color: green; float: left; margin-top: 5px; margin-left:0;'>
                        <i class='glyphicon glyphicon-pencil'></i>
                    </button>
                </a>
                <a href='index.php?page=modifyPost&alterPost=delete&id=".$idPost."'>
                    <button type='submit' class='btnAvecIcon btn' name='btnSupprimer' style='background-color: red; float: left; margin-top: 5px;'>
                        <i class='glyphicon glyphicon-remove'></i>
                    </button>
                </a>";
            
        
    }

    function affichagePosts(){
        $posts = array();
        

        for($i = 0; $i < count(recuperationTousPost()); $i++){
            array_push($posts, recuperationTousPost()[$i]);
        }

        foreach($posts as $post){
            createPost($post["idPost"], recuperationMediaPost($post["idPost"])[0]["typeMedia"], "assets/uploads/" . recuperationMediaPost($post["idPost"])[0]["nomMedia"] . "." .  recuperationMediaPost($post["idPost"])[0]["typeMedia"], $post["commentaire"]);
        }
        //var_dump(recuperationMediaPost(14));
    }

    function verifSiPostePlusieursMedias($idPost){
        
    }

    require("views/main.php");

?>