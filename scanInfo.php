<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    
    <title>ESIG</title>
    <script src="js/scanQr.min.js"></script>

</head>
<body>


  <div class="content">

    <div class="scanBoxHeader">
      <h1> Scanner & Rechercher </h1>
    </div>

    <div class="scanBox">
        <div class="row">
            <div class="col scanLeftBox">
              <div style="width:350px;" id="reader"></div>
            </div>
            <div class="col scanRightBox" style="margin-left: 2vh;" >
              <div id="result" class="result"><h4>ESIG GLOBAL SUCCESS</h4></div>

              <?php

              if (isset($_GET['var'])){

              // set timezone
                  date_default_timezone_set('UTC');
                  $datetimenow = date('Y-m-d H:i:s');
                  
                  // database connection informations
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "projet_foire";

                  $conn = mysqli_connect($servername, $username, $password, $dbname);

                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  $sql = "SELECT * FROM etudiant WHERE emailE='".$_GET['var']."'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                  }else{
                    ?>
                    <script type="text/javascript">
                      
                    </script>
                    <?php
                  }
                  ?>
                  <label for="" style="font-family: Arial, Helvetica, sans-serif;"><h3>Infromations de l'Etudiant</h3></label><br>
                  <label for="" style="color: rgb(12, 204, 211); font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Nom et Prenom: </label><br><label for=""><?php echo ($row['nom']."   ".$row['prenom']); ?></label><br>
                  <label for="" style="color: rgb(12, 204, 211); font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Date de Payement: </label><label for=""><br><?php echo ($row['date_payement']); ?></label><br><br>
                  <?php 
                    $sql2 = "INSERT INTO time(dateT, emailE) VALUES('".$datetimenow."', '".$_GET['var']."')";

                    if (mysqli_query($conn, $sql2))
                    {
                      //echo "Inscription reussie";
                      ?>
                      <label for="" style="font-family: Arial, Helvetica, sans-serif;"><h4>Concernant votre Présence</h4></label><br>
                      <label for=""><h4><span style="color: rgb(12, 204, 211); font-family: Arial, Helvetica, sans-serif;">Status: </span><span>Présent</span></h4></label><br>
                      <label for=""><h4>Heure: <?php echo($datetimenow) ?> </h4></label><br>
                      <?php
                    }
                    else 
                    {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                  }else{
                    
                  }

                  ?>
                
              <div class="btnBox" style="display: flex; flex-direction: column;gap: 2vh;">
              <?php
              if(isset($_GET['var'])){
                ?>
                <a type="submit" class="btn btnColor1" href="search.php?var=<?php if(isset($_GET['var'])){ echo ($_GET['var']); } ?>" style="cursor: pointer;" >Voir Plus</a>
                <?php
              }
                ?>
                <a type="submit" class="btn btnColor2" href="index.php" style="cursor: pointer;">Retour</a>
              </div>

            </div>
          </div>
    </div><!-- 

    <div class="scanBoxBack">
      <a href="index.php" class="btn btnColor3" >Retour</a>
    </div> -->

  </div>




<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
    
    window.location.href="scanInfo.php?var=" + qrCodeMessage;
}

function onScanError(errorMessage) {
  
}


var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);

let id = qrCodeMessage

function myFunction()
{
alert(""); //this is the message in ""
}

</script>


</body>
</html>