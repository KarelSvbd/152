<?php
function creationPost($commentaire, $nomMedia, $typeMedia){
    envoieNouveauPost($commentaire);
    envoieNouveauMedia($nomMedia, $typeMedia, recuperationDernierPost()["idPost"]);
}

function envoieNouveauPost($commentaire){
    try {
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("INSERT INTO POST (commentaire) VALUES('".$commentaire."');");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        MonPdo::getInstance()->commit();
        return true;
    } catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
    
}

function recuperationDernierPost(){
    try{
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("SELECT idPost FROM POST ORDER BY idPost DESC LIMIT 1");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        MonPdo::getInstance()->commit();
        return $sql->fetchAll();
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}

function envoieNouveauMedia($typeMedia, $nomMedia, $idPost){
    try{
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("INSERT INTO MEDIA (typeMedia, nomMedia, idPost) VALUES ('".$typeMedia."', '" . $nomMedia . "', ". $idPost.")");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'MEDIA');
        $sql->execute();
        MonPdo::getInstance()->commit();
        return true;
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}

function recuperationTousPost(){
    try{
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("SELECT * FROM POST");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        MonPdo::getInstance()->commit();
        return $sql->fetchAll();
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}

function recuperationMediaPost($idPost){
    try{
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("SELECT nomMedia, typeMedia FROM MEDIA WHERE idPost = ".$idPost."");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        
        $sql->execute();
        MonPdo::getInstance()->commit();
        return $sql->fetchAll();
    }
    catch (PDOException $e) {
        MonPdo::getInstance()->rollback();
        error_log($e->getMessage());
        return false;
    }
}

function supprimerPost($idPost){
        try{
            supprimerTousMediaDePost($idPost);
            MonPdo::getInstance()->beginTransaction();
            $sql = MonPdo::getInstance()->prepare("DELETE FROM POST WHERE idPost = ".$idPost."");
            $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
            $sql->execute();
            MonPdo::getInstance()->commit();
            return true;
        }
        catch (PDOException $e) {
            $sql->rollback();
            error_log($e->getMessage());
            return false;
        }
}

function supprimerTousMediaDePost($idPost){
    try{
        supprimerMediaLocal("assets/uploads/" . recuperationMediaPost($idPost)[0]["nomMedia"] . "." .  recuperationMediaPost($idPost)[0]["typeMedia"]);
        MonPdo::getInstance()->beginTransaction();
        $sql = MonPdo::getInstance()->prepare("DELETE FROM MEDIA WHERE idPost = ".$idPost."");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        MonPdo::getInstance()->commit();
        return true;
    }
    catch (PDOException $e) {
        //$sql->rollback();
        error_log("empty");
        error_log($e->getMessage());
        return false;
    }
}

function supprimerMediaLocal($adresseFichier){
    var_dump($adresseFichier);
    if (!unlink($adresseFichier)) { 
        return true;
    } 
    return false; 
}
/*
function recuperationMediaPost($idPost){
    try{
        $sql = MonPdo::getInstance()->prepare("SELECT nomMedia, typeMedia FROM MEDIA WHERE idPost = ".$idPost."");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        $response = $sql->fetchAll();
        $return = array();
        foreach($response as $element){
            $return = array_merge($return, array(
                "nomMedia" => $element["nomMedia"],
                "typeMedia" => $element["typeMedia"]
            ));
        }
        
        return $return;
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}
*/
?>