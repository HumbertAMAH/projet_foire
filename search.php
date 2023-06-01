<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/search.css">

  <link rel="stylesheet" type="text/css" href="css/informationPage.css">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <title>ESIG</title>
</head>
<body>

<?php 

$emailE = $_GET['var'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projet_foire";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM etudiant WHERE emailE='".$emailE."'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0)
  {
      $row = mysqli_fetch_assoc($result);
      $data_id = $row['id_etd'];

  ?>





  <div class="corps" id="corps">
    <div class="infoHeader" >
      <img src="images/esig100x100.png" alt="" srcset="">
      <h2>Informations de Recherches détaillées  </h2>
      
    </div>

    <div class="infoContent">

      <div class="infoLeft">



        <div class="infoText">



          <div class="infotext1">

            <label for="">Nom : <span class="dataText"><?php echo $row['nom']; ?> </span></label><br><br>
            <label for="">Prenom : <span class="dataText"><?php echo $row['prenom']; ?> </span></label><br><br>
            <label for="">Date de naissance : <span class="dataText"><?php echo $row['dateN']; ?> </span></label><br><br>
            <label for="">Lieu de naissance : <span class="dataText"><?php echo $row['lieuN']; ?> </span></label><br><br>
            <label for="">Sexe : <span class="dataText"><?php echo $row['sexe']; ?> </span></label><br><br>
            <label for="">Nationalité : <span class="dataText"><?php echo $row['nationalite']; ?> </span></label><br><br>
            <label for="">Situation matrimoniale : <span class="dataText"><?php echo $row['situation_matrimoniale']; ?> </span></label><br><br>
            <label for="">Diplome Obtenu : <span class="dataText"><?php echo $row['diplome_obtenu']; ?> </span></label><br><br>
            <label for="">BP : <span class="dataText"><?php echo $row['BP']; ?> </span></label><br><br>

          </div>
          <div class="infotext2">

            <label for="">Phone : <span class="dataText"><?php echo $row['phone']; ?> </span></label><br><br>
            <label for="">Email : <span class="dataText"><?php echo $row['email']; ?> </span></label><br><br>
            <label for="">Adresse Complète : <span class="dataText"><?php echo $row['addresse']; ?> </span></label><br><br>
            <label for="">Type de Payement : <span class="dataText"><?php echo $row['type_payement']; ?> </span></label><br><br>
            <label for="">Frais de Scolarité : <span class="dataText"><?php echo $row['frais_scolarite']; ?> </span></label><br><br>
            <label for="">Date de Payement : <span class="dataText"><?php echo $row['date_payement']; ?> </span></label><br>
          <?php } ?>

          </div>






        
        </div>

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
    window.location.href = "scanInfo.php";
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


