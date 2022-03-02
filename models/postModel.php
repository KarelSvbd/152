<?php
function creationPost($commentaire, $nomMedia, $typeMedia){
    envoieNouveauPost($commentaire);
    envoieNouveauMedia($nomMedia, $typeMedia, recuperationDernierPost()["idPost"]);
}

function envoieNouveauPost($commentaire){
    $sql = MonPdo::getInstance()->prepare("INSERT INTO POST (commentaire) VALUES('".$commentaire."');");
    $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
    $sql->execute();
}

function recuperationDernierPost(){
    $sql = MonPdo::getInstance()->prepare("SELECT idPost FROM POST ORDER BY idPost DESC LIMIT 1");
    $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
    $sql->execute();
    return $sql->fetchAll();
}

function envoieNouveauMedia($typeMedia, $nomMedia, $idPost){
    $sql = MonPdo::getInstance()->prepare("INSERT INTO MEDIA (typeMedia, nomMedia, idPost) VALUES ('".$typeMedia."', '" . $nomMedia . "', ". $idPost.")");
    $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'MEDIA');
    $sql->execute();
}

function recuperationTousPost(){
    $sql = MonPdo::getInstance()->prepare("SELECT * FROM POST");
    $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
    $sql->execute();
    return $sql->fetchAll();
}

function recuperationImagePost($idPost){
    $sql = MonPdo::getInstance()->prepare("SELECT nomMedia FROM MEDIA WHERE idPost = ".$idPost."");
    $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'POST');
    $sql->execute();
    return $sql->fetchAll();
}

?>