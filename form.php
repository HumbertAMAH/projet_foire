<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ESIG</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/form.css"/>


</head>

<!-- Fonction permettant de generer les matricule -->
<?php 

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

	$sql = "SELECT id_etd FROM etudiant ORDER BY id_etd DESC LIMIT 1";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
	}

	$dernier_id = strval($row['id_etd']);

	$taille_max_id = strlen($dernier_id);

	$nom_ecole = "esig";
	$annee = "2021";

	function matriculeGenerator($dernierId, $nomEcole, $year){
		$new_id = $dernierId + 1;
		$tiret = '-';
		if(strlen(strval($new_id)) == 1){
			$chaine_id = strval($new_id);
			$zero = '000';
			$matriculeG = $nomEcole.$tiret.$zero.$chaine_id.$tiret.$year; 
			return $matriculeG;
		}elseif(strlen(strval($new_id)) == 2){
			$chaine_id = strval($new_id);
			$zero = '00';
			$matriculeG = $nomEcole.$tiret.$zero.$chaine_id.$tiret.$year;
			return $matriculeG;
		}elseif(strlen(strval($new_id)) == 3){
			$chaine_id = strval($new_id);
			$zero = '0';
			$matriculeG = $nomEcole.$tiret.$zero.$chaine_id.$tiret.$year;
			return $matriculeG;
		}elseif(strlen(strval($new_id)) == 4){
			$chaine_id = strval($new_id);
			$matriculeG = $nomEcole.$tiret.$chaine_id.$tiret.$year;
			return $matriculeG;
		}else{}
	}

	$matricule_G = matriculeGenerator($dernier_id, $nom_ecole, $annee);
	
?>

<body>
	<div class="page-content">
		<div class="wizard-heading">Formulaire d'enregistrement</div>
		<div class="wizard-v6-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="enregistrement.php" method="POST">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Informations</h3>
			                	</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
										<label for=""class="special-label-1">Maricule</label> 
											<input value=" <?php echo $matricule_G ?> " type="text" class="form-control" id="first_name" name="matricule" required readonly>
											
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
										<label for=""class="special-label-1">Année</label> 
										<select name="annee" id="room" class="form-control">
											<option value="annee 1">Année 1</option>
											<option value="annee 2">Année 2</option>
											<option value="annee 3">Année 3</option>
										</select>
									
										</label>

										<?php 
											function remplirFraisScolorite($data){
												if($data == 'annee 1'){
													return 295000;
												}elseif($data == 'annee 2'){
													return 350000;
												}elseif($data == 'annee 3'){
													return 400000;
												}else{}
											}
										?>

									</div>
									<div class="form-holder">
										<label class="form-row-inner">
										<label for=""class="special-label-1">Filière</label> 
											<select name="filiere" id="room" class="form-control">
												<option value="SIL">SIL</option>
												<option value="GEII">GEII</option>
												<option value="GMP">GMP</option>
												<option value="GEA">GEA</option>
												<option value="GLT">GLT</option>
												<option value="TC">TC</option>
												<option value="INFO-COM">INFO-COM</option>
											</select>
										
										</label>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="nom" required>
											<span class="label">Nom</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="prenom" required>
											<span class="label">Prenom</span>
										</label>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="date" placeholder="" class="form-control" id="first_name" name="dateN" required>
											<span class="label"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="lieuN" required>
											<span class="label">Lieu de naissance</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="nationalite" required>
											<span class="label">Nationalité</span>
										</label>
									</div>
								</div>

								<div class="form-row">

									<div class="form-holder form-holder-2">
										<label for="sexe" class="special-label-1">Sexe</label>
										<select name="sexe" id="room" class="form-control">
											<option value="masculin">Masculin</option>
											<option value="feminin">Féminin</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
									<div class="form-holder form-holder-2">
										<label for="situation_matrimoniale" class="special-label-1">Situation matrimoniale</label>
										<select name="situation_matrimoniale" id="room" class="form-control">
											<option value="celibataire">Célibataire</option>
											<option value="marié">Marié(e)</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>


								</div>

								<div class="form-heading">
			                		<h3>Autre information</h3>
			                	
			                	</div>

								
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="diplome_obtenu" required>
											<span class="label">Diplome obtenu</span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="BP" required>
											<span class="label">Boite postale</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Numéro de téléphone</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="email" name="email" id="your_email_1" class="form-control"  required>
											<span class="label">E-Mail</span>
										</label>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="address" name="address" required>
											<span class="label">Adresse complet</span>
										</label>
									</div>
								</div>
							</div>
			            </section>


						<!-- SECTION 2 -->
			            <h2>
			         
							<div class="form-heading">
								<h3 style="color: white;"> Contrat de paiement</h3>
							</div>
			            </h2>
			            <section>
			                <div class="inner">

								
								<div class="form-row">

									<div class="form-holder form-holder-2">
										<label for="sexe" class="special-label-1">Type de paiement</label>
										<select name="type_paiement" id="room" class="form-control">
											<option value="unique">Unique</option>
											
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
									<div class="form-holder form-holder-2">
										<label for="frais_scolarite" class="special-label-1">Frais de Scolarité</label>
										<input type="number" name="frais_scolarite" id="your_email_1" placeholder="en FCFA" class="form-control"  required>

									</div>


								</div>

								<div class="form-row">
	

									<div class="form-holder" >
										<label class="form-row-inner" >
											<label for="date_paiement" class="special-label-1">Date paiement</label>
											<input type="date" placeholder="" class="form-control" id="first_name" name="date_paiement" required>	
										</label>
									</div>




								</div>


							</div>
			            </section>
			            <!-- SECTION 3 -->

			            <section>
			                <div class="inner">
			                	<div class="form-heading">



			                	</div>

								<h3 style="color: rgba(255, 255, 255, 0.705);
								font-family: 'monospace', Courier, monospace;
								font-size: medium;padding-bottom: 2rem;">
					veillez a bien revérifier les informations précédemment entrés avant la validation du formulaire d'enregistrement des élèves.

									</h3>


							</div>
			            </section>
		        	</div>

					<button type="submit" class="btnForm btnColor2" style="font-size: larger; margin: auto;">Soumettre</button>

                    

		        </form>
			</div>
			<div class="qrbox">
				<a href="index.php" class="btnForm btnColor1">retour</a>
				
			</div>
		</div>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>

</body>
</html>