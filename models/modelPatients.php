<?php
// on crée une class clients dont le parent est database donc client hérite de tout les attributs
class Patients extends database {
    
    public $id;       
    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $mail;
    



    public function addAllpatients() { //fontion qui va inclure les nouveaux patients
        $queryResult = $this->database->prepare('INSERT INTO patients VALUES (NULL, :lastname, :firstname, :birthdate, :phone, :mail)'); 
        $addAllPatientsData = $queryResult->execute(array(
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'mail' => $_POST['mail']
    ));
       return 'Merci';
    }


    public function listAllpatients() { //fontion qui va afficher les patients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM patients'); 
        $allPatientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allPatientsData;
    }

}