<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Contacts</title>
    <link rel="icon" type="image/png" href="ulcobet.png"/>
    <link rel="stylesheet" href="style.css">
	
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script2.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	
</head>
<body>
	<div id='header'>
        <a href="index.php"><img height="157" src="ulcobet.png" width="207" /></a>
		        <input type="text" placeholder="Nom de compte" name="userid" id="userid" class="userid"/>
        <input type="password" placeholder="Mot de passe" name="pass" id="pass" class="pass" /> 
        <button class="connex" >Se connecter </button>
        <button class="inscri" value="inscription.php">Inscription </button>
	</div>

	<div class="container">
		<ul id="nav" class="myTopnav">
			<li><a></a></li>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="parisencemoment.php">En ce moment</a>
			<li><a href="parisresultats.php">Résultats</a>
			<li><a href="mesparis.php">Mes paris</a></li>
			<li><a href="contacts.php">Contact</a></li>
			<li><a href="creationpari.php">Créer un pari</a></li>
			<li><a href="propositiongage.php">Proposer un gage</a></li>
			<li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
		</ul>
</div>
<div id ="LG_contenu">
		<h1>Confidentialite</h1>
		  <div class ="LG_formucreapari">
				<form class="Formu" novalidate>
			    <label for="Titrepari"><p>Entrez votre ancien mot de passe:</p></label>
                <input type="text" placeholder="ancien mot de passe" id="LG_Titre" /></br></br>
	       		
			    <label for="datedebut"><p>Entrez votre nouveau mot de passe:</p></label>
			    <input type="text" placeholder="nouveau mot de passe" id="LG_ddf" /></br></br>
    
                <label for="datedebut"><p>Retapez votre nouveau mot de passe:</p></label>
			    <input type="text" placeholder="Verif' nouveau mot de passe" id="LG_ddf" /></br></br>
    
                

                <label for="datedebut"><p>Pour la sécurité de votre compte veuillez entre votre date de naissance:</p></label>
			    <input type="date" placeholder="date de naissance" id="LG_ddf" /></br></br></br>

                <div class ="LG_button">
			    <input  type="submit" value = "Enregistrer"/></br>
                </div>
				</form>
                

        </div>
	    </div>
	</div>
</body>
</html>