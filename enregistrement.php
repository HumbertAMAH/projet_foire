<?php

    function verifChamps($data){
        if(empty($data) && isset($data)){
            echo "Veullez remplir le champ";
        ?>
        <div class="alert alert-success">
            <strong>ERREUR </strong> remplisser Les Champs obligatoire
            <a href="form.php" class="alert-link">Retourner vers le formulaire</a>.
            </div>
        <?php
        exit();
        }else{
            return $data;
        }
    }

    $matricule = verifChamps($_POST['matricule']);
    $annee = verifChamps($_POST['annee']);
    $filiere = verifChamps($_POST['filiere']);
    $nom = verifChamps($_POST['nom']);
    $prenom = verifChamps($_POST['prenom']);
    $dateN = verifChamps($_POST['dateN']);
    $lieuN = verifChamps($_POST['lieuN']);
    $nationalite = verifChamps($_POST['nationalite']);
    $sexe = verifChamps($_POST['sexe']);
    $situation_matrimoniale = verifChamps($_POST['situation_matrimoniale']);
    $diplome_obtenu = verifChamps($_POST['diplome_obtenu']);
    $BP = verifChamps($_POST['BP']);
    $phone = verifChamps($_POST['phone']);
    $email = verifChamps($_POST['email']);
    $addresse = verifChamps($_POST['address']);
    $type_paiement = verifChamps($_POST['type_paiement']);
    $frais_scolarite = verifChamps($_POST['frais_scolarite']);
    $date_paiement = verifChamps($_POST['date_paiement']);
    
    // connection creds
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet_foire";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /* fonction pour generer l'emeil de l'ecole */
    function emailGenerator($prenom_f, $nom_f){
        $st = "etu@esig.tg";
    $point = ".";
        $email = strtolower($prenom_f.$point.$nom_f.$point.$st);
    return strval($email);
    }

$emailE = emailGenerator($prenom, $nom);

echo ("<h1>L'email d'esig est :".$emailE." </h1>");


    /* Fonction de chiffrement de données */
    function chiffrement(){
        global $matricule;
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = 'Si94/*6mon2\7e@t';
        $encryption_key = 'Robi/ns1\\5748@o';
        $encryption_matricule = openssl_encrypt($matricule, $ciphering, $encryption_key, $options, $encryption_iv);
        return $encryption_matricule;
    }

    $matricule_crypter = chiffrement();

    $sql = "INSERT INTO etudiant
    (matricule, annee, filiere, nom, prenom, dateN, lieuN, nationalite, sexe, 
    situation_matrimoniale, diplome_obtenu, BP, phone, 
    email, emailE, addresse, type_payement, frais_scolarite, date_payement) 
    VALUES
    ('".$matricule_crypter."', '".$annee."', '".$filiere."', '".$nom."', '".$prenom."', '".$dateN."', 
    '".$lieuN."', '".$nationalite."', '".$sexe."', '".$situation_matrimoniale."', '".$diplome_obtenu."', 
    '".$BP."', '".$phone."', '".$email."', '".$emailE."', '".$addresse."', '".$type_paiement."', '".$frais_scolarite."', 
    '".$date_paiement."')";

    if (mysqli_query($conn, $sql)) {
        //echo "Inscription reussie";
        ?>
        <div class="alert alert-success">
            <strong>OK!</strong> Inscription reussie
            <a href="index.php" class="alert-link">Retourner vers le formulaire</a>.
            </div>
        <?php
        }
        else 
        {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

        header('Location: validation.php?matricule='.$matricule.'&emailE='.$emailE.'&annee='.$annee.
        '&filiere='.$filiere.'&nom='.$nom.'&prenom='.$prenom.'&dateN='.$dateN.'&lieuN='.$lieuN.
        '&nationalite='.$nationalite.'&sexe='.$sexe.
        '&situation_matrimoniale='.$situation_matrimoniale.
        '&diplome_obtenu='.$diplome_obtenu.'&BP='.$BP.'&phone='.$phone.
        '&email='.$email.'&addresse='.$addresse.
        '&type_paiement='.$type_paiement.'&frais_scolarite='.$frais_scolarite.'&date_paiement='.$date_paiement);

        exit();

?>