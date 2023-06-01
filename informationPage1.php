<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/informationPage.css">

</head>
<body>
  <div class="corps">
    <div class="infoLogo">
      <img src="images/logoEsigWhite-03.png" alt="" srcset="">
    </div>

    <div class="infoContent">

      <div class="infoLeft">

        <div class="infoText">

          
          <div class="infoHeader">
            <h1>Information de l'étudiant</h1>
          </div>

      
         

            <section class="row1">
                <p><span class="dataTextFix">Matricule</span>:<span class="dataText"> <?php echo $_GET['matricule']; ?> </span></p>
                <p><span class="dataTextFix">Année</span>:<span class="dataText"><?php echo $_GET['annee']; ?></span></p>
            </section>

            <p><span class="dataTextFix">Nom Complet</span>:<span class="dataText"><?php echo $_GET['nom'].'  '.$_GET['prenom']; ?></span></p>

            <section class="row1">
                <p><span class="dataTextFix">Date de Naissance</span>:<span class="dataText"><?php echo $_GET['dateN']; ?></span></p>
                <p><span class="dataTextFix">Lieu de Naissance</span>:<span class="dataText"><?php echo $_GET['lieuN']; ?></span></p>
            </section>

            <section class="row1">
                <p><span class="dataTextFix">Filière</span>:<span class="dataText"><?php echo $_GET['filiere']; ?></span></p>
                <p><span class="dataTextFix">Diplome obtenu</span>:<span class="dataText"><?php echo $_GET['diplome_obtenu']; ?></span></p>
            </section>


            <section class="row1">
                <p><span class="dataTextFix">Sexe</span>:<span class="dataText"><?php echo $_GET['sexe']; ?></span></p>
                <p><span class="dataTextFix">Situation Matrimoniale</span>:<span class="dataText"><?php echo $_GET['situation_matrimoniale']; ?></span></p>
            </section>

            <section class="row1">
                <p><span class="dataTextFix">Nationalité</span>:<span class="dataText"><?php echo $_GET['nationalite']; ?></span></p>
                <p><span class="dataTextFix">Boite Postale</span>:<span class="dataText"><?php echo $_GET['BP']; ?></span></p>
            </section>

            <p><span class="dataTextFix">Adresse Complet</span>:<span class="dataText"><?php echo $_GET['addresse']; ?></span></p>

            <section class="row1">
                <p><span class="dataTextFix">Email</span>:<span class="dataText"><?php echo $_GET['email']; ?></span></p>
                <p><span class="dataTextFix">Téléphone</span>:<span class="dataText"><?php echo $_GET['phone']; ?></span></p>
            </section>
            
            <p><span class="dataTextFix">Type de Paiement</span>:<span class="dataText"><?php echo $_GET['type_paiement']; ?></span></p>
            <p><span class="dataTextFix">Frais de Scolarité</span>:<span class="dataText"><?php echo $_GET['frais_scolarite']; ?></span><span class="dataText">FCFA</span></p>
            <p><span class="dataTextFix">Date de Paiement</span>:<span class="dataText"><?php echo $_GET['date_paiement']; ?></span></p>
        
        
        
        </div>

      </div>
  
    
      <div class="code_qr glass">

        <br>
        <img class="qrious">
        <br><br>
        <form action="" method="POST" name="form" >
          <input type="text" name="id"   value="<?php echo $_GET['matricule']; ?>"  oninput="change(this)" >
          
        </form>
        <br>
        <div class="information">
          
        </div><br>
        <button class="btn btnColor3">Télécharger le QR Code</button>
        <br><br>

        <div class="btnBox">
          <button class="btn btnColor1">retour</button>
          <button class="btn btnColor2">Imprimer</button>
        </div>
      </div>


    </div>


  </div>

      

        
          

          
  
              

     
<!-- on commence a partir d'ici -->


<script src="js/qrious.js"></script>
<script src="js/script.js"></script>
</body>
</html>