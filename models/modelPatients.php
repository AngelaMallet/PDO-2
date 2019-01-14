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
    return 'Merci';
    }


    public function listAllpatients() { //fontion qui va afficher les patients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM patients'); 
        $allPatientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allPatientsData;
    }
   
   public function Idpatients() {
        //je fais ma requête dans une variable $query
        $query = 'SELECT * FROM patients WHERE id=:id';
        //le résultat de ma requête je le stocke dans $showProfileList
        //$this = correspond aux attributs de ma classe ex patients, à l'élément de ma classe (table patients) 
        $resultProfilePatient = $this->database->prepare($query);
        //avec le this=ATTRIBUT il faut cibler l'élément de ma classe 
        //Je lie le marqueur nominatif id à l'attribut id
        $resultProfilePatient->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $resultProfilePatient->execute();
        $arrayProfilePatient=$resultProfilePatient->fetch(PDO::FETCH_OBJ);
        return $arrayProfilePatient;
        //le résultat = on lui demande d'aller chercher les éléments firstname,lastname...etc donc il faut 
        //faire un fetchALL en utilisant l'objet PDO.
    }
   
   
    
    public function __destruct() {
        parent::__destruct();
    }
}
    