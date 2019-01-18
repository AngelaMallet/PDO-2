<?php

class appointments extends database {
      // Attributs en public
    public $id;       
    public $dateHour;
    public $idPatients;
    

    /**
     * Fonction qui ajoute un patient
     * @return type EXECUTE
     */
    public function addAppointments() { //addAppointments est une méthode avec la requête 
    //qui va inclure les nouveaux rendez-vous dans la table appointments.
    
    //Insertion des données de rendez-vous à l'aide de la requête préparée avec INSERT INTO et le nom des champs de du formulaire
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('INSERT INTO appointments ( dateHour, idPatients ) VALUES (:dateHour, :idPatients )'); 
        $queryResult->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $queryResult->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
            
        return $queryResult->execute(); //@return exécute la requete pour ajouter un pacient
    }
}