<?php

class appointments extends database {
      // Attributs en public
    public $id;       
    public $dateHour;
    public $idPatients;
    public $dateHourAlias;

    public function checkFree(){
        $query = 'SELECT * FROM appointments WHERE dateHour = :dateHour';
        $sql = $this->database->prepare($query);
        $sql->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $sql->execute();
        return $sql->rowCount();
    }
    
    
    /**
     * Fonction qui ajoute un patient
     * @return type EXECUTE
     */
    public function addAppointments() { //addAppointments est une méthode avec la requête 
    //qui va inclure les nouveaux rendez-vous dans la table appointments.
    
    //Insertion des données de rendez-vous à l'aide de la requête préparée avec INSERT INTO et le nom des champs de du formulaire
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)'); 
        $queryResult->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $queryResult->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
            
        return $queryResult->execute(); //@return exécute la requete pour ajouter un rendez-vous
    }
    
    
    
    /**
     * 
     * @return type requête pour la liste des rendez-vous
     */
    public function ListAppointments() {
        //je fais ma requête dans une variable $query
        $query = 'SELECT idPatients, DATE_FORMAT(appointments.dateHour, "%d/%m/%Y - %H:%i") AS dateHourAlias FROM appointments ORDER BY dateHour';
        
        $resultAppointments = $this->database->query($query);
        $arrayresultAppointments=$resultAppointments->fetchAll(PDO::FETCH_OBJ);
        return $arrayresultAppointments;
        //le résultat = on lui demande d'aller chercher les éléments firstname,lastname...etc donc il faut 
        //faire un fetchALL en utilisant l'objet PDO.
    }
    
    
    /**
     * 
     * @return type requête pour le destail des rendez-vous rendezvous.php
     */
    public function appointmentsDetail() {
        //je fais ma requête dans une variable $query
        $query = 'SELECT patients.lastname, patients.firstname, DATE_FORMAT(appointments.dateHour, "%d/%m/%Y - %H:%i") AS dateHour, appointments.idPatients FROM appointments INNER JOIN patients ON appointments.idPatients= patients.id WHERE idPatients = :id';
        $resultAppointmentsDetail = $this->database->prepare($query);
        $resultAppointmentsDetail->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $resultAppointmentsDetail->execute();
        $arrayresultAppointmentsDetail=$resultAppointmentsDetail->fetch(PDO::FETCH_OBJ);
        return  $arrayresultAppointmentsDetail;
        //le résultat = on lui demande d'aller chercher les éléments firstname,lastname...etc donc il faut 
        //faire un fetchALL en utilisant l'objet PDO.
    }

}

