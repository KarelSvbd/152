<?php
    require("models/postModel.php");
    function createPost($lienImage, $description){
        echo  "<div class='poste' style='height: 150px;width: 100%;background-color: #dedede;border: 1px solid black;float: left;margin-top: 10px;'>
                    <img src='".$lienImage."' height=100 style='float:left'>
                    <p>".$description."</p>
                    <form method='POST' action='#'>
                        <button type='submit' class='btnAvecIcon btn' name='btnModifier'>
                            <i class='glyphicon glyphicon-pencil'></i>
                        </button>
                        <button type='submit' class='btnAvecIcon btn' name='btnSupprimer'>
                            <i class='glyphicon glyphicon-remove'></i>
                        </button>
                    </form>
                </div>";
    }

    function affichagePosts(){
        for($i = 0; $i < count(recuperationTousPost()); $i++){
            createPost("assets/uploads/DiagrameMainVr.jpg", recuperationTousPost()[$i]["commentaire"]);
        }
    }



?>