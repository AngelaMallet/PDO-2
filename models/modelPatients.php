<?php
/**
 * on crée une classe Patients dont le parent est database donc patients hérite de tous les attributs
 * La class patients va permettre d'accéder à la table patients de la database hospitalE2N
 */
class Patients extends database {
      // Attributs en public
    public $id;       
    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $mail;
    public $search;
        


    // Méthode magique __construct() L’évènement qui appelle la méthode__constructest est la création de l'objet.
    public function __construct() {
        parent::__construct();
    }

    /**
     * Fonction qui ajoute un patient
     * @return type EXECUTE
     */
    public function addPatient() { //addAllpatients est une méthode avec la requête 
    //qui va inclure les nouveaux patients dans la table patients.
    
    //Insertion des données du patient à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('INSERT INTO patients(lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)'); 
        $queryResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $queryResult->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $queryResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);
            
        return $queryResult->execute(); //@return exécute la requ^e pour ajouter un pacient
    }
        
//        $addAllPatientsData = $queryResult->execute(array(
//        'lastname' => $this->lastname,
//        'firstname' => $this->firstname,
//        'birthdate' => $this->birthdate,
//        'phone' => $this->phone,
//        'mail' => $this->mail

   
/**
 * 
 * @return Méthode qui affiche les patients
 */

    public function listAllpatients() { //fontion qui va afficher les patients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM patients ORDER BY lastname'); 
        $allPatientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allPatientsData;
    }
   
   public function Idpatients() {
        //je fais ma requête dans une variable $query
        $query = 'SELECT `id`, `lastname`, `firstname`,DATE_FORMAT(`birthdate`, "%d/%m/%Y") AS birthdate, `phone`, `mail` FROM patients WHERE id=:id';
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
   
    
    
    public function modifPatient() { //addAllpatients est une méthode avec la requête 
    //qui va inclure les nouveaux patients dans la table patients.
    
    //Modifications des données du patient à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('UPDATE patients SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, phone=:phone, mail=:mail WHERE id = :id');
        $queryResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $queryResult->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $queryResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
            
        return $queryResult->execute(); //@return exécute la requ^e pour ajouter un pacient
    }
    
    
       public function DeletePatient() {
        //je fais ma requête dans une variable $query
        $queryResult = $this->database->prepare('DELETE
                  FROM patients
                  WHERE id =:id;');
        
       $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
       return $queryResult->execute(); //@return exécute la requ^e pour ajouter un patient
       
    }
    
    public function find() {
        //je fais ma requête dans une variable $query
        $queryResult = $this->database->prepare('SELECT * FROM patients WHERE `lastname` LIKE :search OR `firstname` LIKE :search ORDER BY `lastname`');
        $queryResult->bindValue(':search', '%' . $this->search . '%' , PDO::PARAM_STR);
        $queryResult->execute();
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
        
    }
    
      public function __destruct() {
        parent::__destruct();
    }
}




