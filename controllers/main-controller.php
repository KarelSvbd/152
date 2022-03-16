<?php
    require("models/postModel.php");
    function createPost($typeMedia, $lienMedia, $description){
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
            <form method='POST' action='#'>
                <button type='submit' class='btnAvecIcon btn' name='btnModifier' style='background-color: green; float: left; margin-top: 5px; margin-left:0;'>
                    <i class='glyphicon glyphicon-pencil'></i>
                </button>
                <button type='submit' class='btnAvecIcon btn' name='btnSupprimer' style='background-color: red; float: left; margin-top: 5px;'>
                    <i class='glyphicon glyphicon-remove'></i>
                </button>
            </form>";
            
        
    }

    function affichagePosts(){
        for($i = 1; $i < count(recuperationTousPost()) + 1; $i++){
            createPost(recuperationImagePost($i)[0]["typeMedia"], "assets/uploads/" . recuperationImagePost($i)[0]["nomMedia"] . "." .  recuperationImagePost($i)[0]["typeMedia"], recuperationTousPost()[$i - 1]["commentaire"]);
            
        }
        //var_dump(recuperationMediaPost(14));
    }

    function verifSiPostePlusieursMedias($idPost){

    }



?>