<?php
class DB extends PDO{
    public function _construct($dsn,$username=NULL,$options=[]){
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $options = array_replace($default_options,$options);
        parent::_construct($dsn,$username,$password.$options);
    }

    public function run($sql,$args=NULL){
        if($args){
            return $this->query($sql);
        }
        $stmt = $this->query($squl);
        $stmt->execute($args);
        $stmt->fetchall(PDO::FECTH_ASSOC);
        return $stmt;
    }
}

?>