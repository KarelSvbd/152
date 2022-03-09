
<?php
class Media{

    private $_idMedia ;
    private $_typeMedia;
    private $_nomMedia;
    private $_creationDate;
    private $_modificationDate;
    private $_idPost;

    public function getIdMedia(){
        return $this->_idMedia;
    }
    public function setIdMedia($idMedia){
        $this->_idMedia = $idMedia;
    }

    public function getTypeMedia(){
        return $this->_typeMedia;
    }
    public function setTypeMedia($typeMedia){
        $this->_typeMedia = $typeMedia;
    }

    public function getNomMedia(){
        return $this->_nomMedia;
    }
    public function setNomMedia($nomMedia){
        $this->_nomMedia = $nomMedia;
    }

    public function getCreationDate(){
        return $this->_creationDate;
    }
    public function setCreationDate($creationDate){
        $this->_creationDate = $creationDate;
    }

    public function getModificatonDate(){
        return $this->_modificationDate;
    }
    public function setModificationDate($modificationDate){
        $this->_modificationDate = $modificationDate;
    }

    public function getIdPost(){
        return $this->_idPost; 
    }
    public function setIdPost($idPost){
        $this->_idPost = $idPost;
    }

    
    function __construct($idMedia, $typeMedia, $nomMedia, $creationDate, $modificationDate, $idPost){
        $this->_idMedia = $idMedia;
        $this->_typeMedia = $typeMedia;
        $this->_nomMedia = $nomMedia;
        $this->_creationDate = $creationDate;
        $this->_modificationDate = $modificationDate;
        $this->_idPost = $idPost;  
    }

    
}
?>