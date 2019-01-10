<?php
class database {
    public $database;
    public function __construct(){
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'pda', 'pda', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $error) {
            die('Erreur de connexion ' . $error->getMessage());   
        }
    }

    public function __destruct(){
        $this->database = NULL;
    }
}

