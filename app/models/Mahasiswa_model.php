<?php

class Mahasiswa_model
{
    private $dbh;   // Database handler
    private $stmt;

    public function __construct(){
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e){
            die($e->getMessege());
        }
    }

    public function getAllMahasiswa(){
       $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
       $this->stmt->execute();
       return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
