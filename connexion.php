<?php
if (isset($_POST['pseudo'])) && (isset($_POST['Mot de passe']) {

   FUNCTION validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
    $pseudo = validate($_POST['pseudo']);
    $mot de passe = validate($_POST['mot de passe']);
}








?>