
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="css/informationPage.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="corps" id="corps">
    <div class="infoHeader">
      <img src="images/esig100x100.png" alt="" srcset="">
      <h2>Informations Personnelles <br> de l'étudiant Enregistré</h2>
      

    </div>

    <div class="infoContent">

      <div class="infoLeft">



        <div class="infoText">

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

            <p><span class="dataTextFix">Adresse Complete</span>:<span class="dataText"><?php echo $_GET['addresse']; ?></span></p>

            <section class="row1">
                <p><span class="dataTextFix">Email</span>:<span class="dataText"><?php echo $_GET['email']; ?></span></p>
                <p><span class="dataTextFix">Téléphone</span>:<span class="dataText"><?php echo $_GET['phone']; ?></span></p>
            </section>
            
            <p><span class="dataTextFix">Type de Paiement</span>:<span class="dataText"><?php echo $_GET['type_paiement']; ?></span></p>
            <p><span class="dataTextFix">Frais de Scolarité</span>:<span class="dataText"><?php echo $_GET['frais_scolarite']; ?></span><span class="dataText">FCFA</span></p>
            <p><span class="dataTextFix">Date de Paiement</span>:<span class="dataText"><?php echo $_GET['date_paiement']; ?></span></p>
        
        </div>

      </div>

      <div class="code_qr">

        <img class="qrious">
        <br><br>
        <form action="" method="POST" name="form">
          <input type="text" name="id"   value="<?php echo $_GET['emailE']; ?>"  oninput="change(this)" >
        </form>
        <br>
        <div class="information">   
        </div><br>
<br>


      </div>

    </div>


  </div>
  <div class="btnBox">
          
    <button class="btn btnColor1" onclick="retour()"><i class="fa fa-chevron-left"></i></button>
    <button class="btn btnColor2 " onclick="imprimer('corps')"><i class="fa fa-print"></i></button>
    <button class="btn btnColor3" onclick="home()"><i class="fa fa-chevron-right"></i></button>
  </div>

       
<!-- on commence a partir d'ici -->

<script>

   function retour(){
    window.location.href = "form.php";
   }
   function home(){
    window.location.href = "index.php";
   }


  function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
      var originalContents = document.body.innerHTML;      
      document.body.innerHTML = printContents;     
      window.print();     
      document.body.innerHTML = originalContents;
    }
</script>

<script src="js/qrious.js"></script> 
<script src="qrcode.js"></script>
<script src="js/script.js"></script>


</body>


</html>