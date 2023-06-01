<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/validation.css"/>
    <title>ESIG</title>
</head>
<body>
    <div class="valideBox">
        <h2>
            Le formulaire soumis a été enregistré avec success
        </h2>

        <?php

            function valider(){
                $matricule = $_GET['matricule'];
                $annee = $_GET['annee'];
                $filiere = $_GET['filiere'];
                $nom = $_GET['nom'];
                $prenom = $_GET['prenom'];
                $dateN = $_GET['dateN'];
                $lieuN = $_GET['lieuN'];
                $nationalite = $_GET['nationalite'];
                $sexe = $_GET['sexe'];
                $situation_matrimoniale = $_GET['situation_matrimoniale'];
                $diplome_obtenu = $_GET['diplome_obtenu'];
                $BP = $_GET['BP'];
                $phone = $_GET['phone'];
                $email = $_GET['email'];
                $addresse = $_GET['address'];
                $type_paiement = $_GET['type_paiement'];
                $frais_scolarite = $_GET['frais_scolarite'];
                $date_paiement = $_GET['date_paiement'];
                $emailE = $_GET['emailE'];

                header('Location: informationPage.php?matricule='.$matricule.'&annee='.$annee.'&emailE='.$emailE.'&filiere='.$filiere.'&nom='.$nom.'&prenom='.$prenom.'&dateN='.$dateN.'&lieuN='.$lieuN.'&nationalite='.$nationalite.'&sexe='.$sexe.
            '&situation_matrimoniale='.$situation_matrimoniale.'&diplome_obtenu='.$diplome_obtenu.'&BP='.$BP.'&phone='.$phone.'&email='.$email.'&addresse='.$addresse.'&type_paiement='.$type_paiement.'&frais_scolarite='.$frais_scolarite.'&date_paiement='.$date_paiement);

            }
        ?>
        
        <a href="index.html" onclick=" <?php valider(); ?>" class="btn">Continuer</a>




    </div>
</body>
</html>