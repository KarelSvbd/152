<?php
function creationPost($commentaire, $nomMedia, $typeMedia){
    envoieNouveauPost($commentaire);
    envoieNouveauMedia($nomMedia, $typeMedia, recuperationDernierPost()["idPost"]);
}

function envoieNouveauPost($commentaire){
    try {
        $sql = MonPdo::getInstance()->prepare("INSERT INTO POST (commentaire) VALUES('".$commentaire."');");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        return true;
    } catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
    
}

function recuperationDernierPost(){
    try{
        $sql = MonPdo::getInstance()->prepare("SELECT idPost FROM POST ORDER BY idPost DESC LIMIT 1");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
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
        $sql = MonPdo::getInstance()->prepare("INSERT INTO MEDIA (typeMedia, nomMedia, idPost) VALUES ('".$typeMedia."', '" . $nomMedia . "', ". $idPost.")");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'MEDIA');
        $sql->execute();
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
        $sql = MonPdo::getInstance()->prepare("SELECT * FROM POST");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        return $sql->fetchAll();
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}

function recuperationImagePost($idPost){
    try{
        $sql = MonPdo::getInstance()->prepare("SELECT nomMedia, typeMedia FROM MEDIA WHERE idPost = ".$idPost."");
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
        $sql->execute();
        return $sql->fetchAll();
    }
    catch (PDOException $e) {
        $sql->rollback();
        error_log($e->getMessage());
        return false;
    }
}

?>