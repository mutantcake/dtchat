<?php
if (isset($_POST['pseudo'])) && (isset($_POST['Mot de passe'])) {

   FUNCTION validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
    $pseudo = validate($_POST['pseudo']);
    $mot de passe = validate($_POST['mot de passe']);

    if(empty($pseudo)){
        header("location: index.php?error=pseudo is required is required");
        exit();
    }else if(empty($pseudo)){
        header("location: index.php?error=mot de passe is required is required");
        exit();
    }else{
        echo "valid input";
    }else{
        header("location: index.php");
        exit();
    }
        
}








?>