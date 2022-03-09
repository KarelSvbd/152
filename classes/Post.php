<?php
class Post{
    private $_idPost;
    private $_commentaire;
    private $_creationDate;
    private $_modificationDate;

    public function getIdPost(){
        return $this->_idPost;
    }
    public function setIdPost($idPost){
        $this->_idPost = $idPost;
    }

    public function getCommentaire(){
        return $this->_commentaire;
    }
    public function setCommentaire($commentaire){
        $this->_commentaire = $commentaire;
    }

    public function getCreationDate(){
        return $this->_creationDate;
    }
    public function setCreationDate($creationDate){
        $this->_creationDate = $creationDate;
    }

    public function getModificationDate(){
        return $this->_modificationDate;
    }
    public function setModificationDate($modificationDate){
        $this->_modificationDate = $modificationDate;
    }

    function __construct($idPost, $commentaire, $creationDate, $modificationDate)
    {
        $this->_idPost = $idPost;
        $this->_commentaire = $commentaire;
        $this->_creationDate = $creationDate;
        $this->_modificationDate = $modificationDate;
    }
}
?>