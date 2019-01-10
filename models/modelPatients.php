<?php
// on crée une classe Patients dont le parent est database donc patients hérite de tous les attributs
// La class patients va permettre d'accéder à la table patients de la database hospitalE2N
class Patients extends database {
      
    public $id;       
    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $mail;
    
    // Méthode magique __construct() L’évènement qui appelle la méthode__constructest est la création de l'objet.
    public function __construct() {
        parent::__construct();
    }

    //on
    //@return type EXECUTE
    public function addAllpatients() { //addAllpatients est une méthode avec la requête 
    //qui va inclure les nouveaux patients dans la table patients.
    
    //Insertion des données du patient à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 
        $queryResult = $this->database->prepare('INSERT INTO patients(lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)'); 
        
        $addAllPatientsData = $queryResult->execute(array(
        'lastname' => $this->lastname,
        'firstname' => $this->firstname,
        'birthdate' => $this->birthdate,
        'phone' => $this->phone,
        'mail' => $this->mail
    ));
    
        //on utilise la méthode execute() via un return
        return $addAllPatients->execute();
    }


    public function listAllpatients() { //fontion qui va afficher les patients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM patients'); 
        $allPatientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allPatientsData;
    }

    public function Idpatients() { //fontion qui va afficher l'Id du patient
        // pour après récupérer ses informations
        $queryResult = $this->database->query('SELECT id FROM patients'); 
        $IdPatientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $IdPatientsData;
    }
    
    public function __destruct() {
        parent::__destruct();
    }
}