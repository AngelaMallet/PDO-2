<?php
// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';
$regexbirthDate = '/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19([0-9]{2})|20([01][0-9]))$/'; //autorise le format date jj/mm/aaa

// Déclaration d'un tableau d'erreurs
$formError = [];
////firstname
if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']); 
    if (!preg_match($regexText, $firstname)) {
        $formError['firstname'] = 'Saisie non valide';
    }
    if (empty($_POST['firstname'])) {
        $formError['firstname'] = 'Saisie vide';
    }
 
}

////lastname
if (isset($_POST['lastname'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    if (!preg_match($regexEmail, $lastname)) {
        $formError ['lastname'] = 'Saisie non valide';
    }
    if (empty($_POST['lastname'])) {
        $formError ['lastname'] = 'Saisie vide';
    }
    
}

//mail  
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    if (!preg_match($regexEmail, $mail)) {
        $formError ['mail'] = 'Saisie non valide';
    }
    if (empty($_POST['mail'])) {
        $formError ['mail'] = 'Saisie vide';
    }
    
}

//birthdate
if (isset($_POST['birthdate'])) {
    $birthdate = htmlspecialchars($_POST['birthdate']);
    if (!preg_match($regexBirthdate, $birthdate)) {
        $formError ['birthdate'] = 'Saisie non valide';
    }
    if (empty($_POST['birthdate'])) {
        $formError ['birthdate'] = 'Saisie vide';
    }
    
}

//on vérifie que nous avons crée une entrée submit dans l'array $_POST, si présent on éxécute la méthode addPatient()
