<?php

require_once 'models/modelDatabase.php';
require_once 'models/modelPatients.php';
$patientsObj = new Patients();



// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';
$regexPhone = '/^0[0-9]([ .-]?[0-9]{2}){4}$/';
$regexbirthDate = '/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19([0-9]{2})|20([01][0-9]))$/'; //autorise le format date jj/mm/aaa
//Pour les regexs les groupes sont mis dans des parenthèses. Dans les parenthèses, tout ce qui est entre les crochets sont des données demandées. 
//Tout ce  qui est hors crochets et hors parenthèses est obligatoire.


//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;


// Déclaration d'un tableau d'erreurs
$formError = [];
////firstname
if (isset($_POST['firstname'])) {
    //Si: je récupère la valeur de firstname
    $patientsObj->firstname = htmlspecialchars($_POST['firstname']); 
    //
    if (!preg_match($regexText, $patientsObj->firstname)) {
        $formError['firstname'] = 'Saisie non valide';
    }
    if (empty($_POST['firstname'])) {
        $formError['firstname'] = 'Saisie vide';
    }
 
}

////lastname
if (isset($_POST['lastname'])) {
    $patientsObj->lastname = htmlspecialchars($_POST['lastname']);
    if (!preg_match($regexText, $patientsObj->lastname)) {
        $formError ['lastname'] = 'Saisie non valide';
    }
    if (empty($_POST['lastname'])) {
        $formError ['lastname'] = 'Saisie vide';
    }
    
}

//mail  
if (isset($_POST['mail'])) {
    $patientsObj->mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regexEmail, $patientsObj->mail)) {
        $formError ['mail'] = 'Saisie non valide';
    }
    if (empty($_POST['mail'])) {
        $formError ['mail'] = 'Saisie vide';
    }
    
}

//phone  
if (isset($_POST['phone'])) {
    $patientsObj->phone = htmlspecialchars($_POST['phone']);
    if (!preg_match($regexPhone, $patientsObj->phone)) {
        $formError ['phone'] = 'Saisie non valide';
    }
    if (empty($_POST['phone'])) {
        $formError ['phone'] = 'Saisie vide';
    }
    
}

//birthdate
if (isset($_POST['birthdate'])) {
    $date = htmlspecialchars($_POST['birthdate']);
    if (!preg_match($regexbirthDate, $date)) {
        $formError ['birthdate'] = 'Saisie non valide';
    }
    if (empty($_POST['birthdate'])) {
        $formError ['birthdate'] = 'Saisie vide';
    }
    
}

// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoi les nouvelles données dans ma table client
if (count($formError) == 0 && isset($_POST['send'])) {
    $date = explode("/", $date);
    $patientsObj->birthdate = $date[2].'-'.$date[1].'-'.$date[0];
    $patientsObj->addPatient(); 
    $addSuccess = true;
    /* Redirection vers une page différente du même dossier */
$extra = 'welcome.php';
header("Location: http://localhost:8888/PDO-P2/$extra");
exit;
}
//on vérifie que nous avons crée une entrée submit dans l'array $_POST, si présent on éxécute la méthode addPatient()