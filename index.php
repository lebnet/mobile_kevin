<?php 	require('global.php'); 	?>
<!DOCTYPEHTML>
<html lang="fr">
	<head>
		<meta charset="utf_8">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<meta name="viewport"content="width=device-width;initial-scale=1.0;user-scalable=no">
		<meta name="description"content=""/>
		<meta name="author"CONTENT="Auteur:Rémicollignon;"/>
		<meta name="copyright"content="©rcdinfo.fr"/>
		<meta name="revisit"content="1days"/>

		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

		<link rel="stylesheet"href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet"href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

		<title>SELECT</title>

		<link rel="icon" type="image/png" href="img/fav.jpg"/>
		<!--[ifIE]><link rel="shortcuticon"type="image/x-icon"href="img/fav.jpg"/><![endif]-->		

		<style>
			h1{
				text-align: center;
			}
			iframe{
				height: 1200px;
				left: -220px;
				position: absolute;
				top: -332px;
				width: 1080px;
			}
			#iframe{
				height: 205px;
				overflow: hidden;
				position: relative;
				width: 650px;
			}
		</style>
	</head>
	<body>
		<img class="col-sm-1 " id="logo" src="http://t1.ftcdn.net/jpg/00/32/17/34/400_F_32173424_mEsqnM0aIso6Qs86HJc1OkeEvZn5GnAt.jpg"/>
		<div class="container col-lg-8 col-lg-offset-1">
			<div class="jumbotron">
				<h1>Tarifs pour un séjour à l'étranger avec Sosh</h1>
			</div>
			<?php 
				if( !isset($_POST['pays'])){
					echo('<form class="form-horizontal" method="POST">
							<fieldset>
								<!--FormName-->
								<legend> Laissez vous guider...</legend>

								<!--SelectBasic-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="pays">Indiquez le pays de votre séjour</label>
									<div class="col-md-5">
									<select id="pays" name="pays" class="form-control">
										<option disabled selected>-- PAYS --</option>
										<optgroup label="EU">
					');
					listP($pays_EUROPE); 
					echo('	<optgroup label="And_Suis">  ');
					listP($pays_SA); 
					echo('	<optgroup label="USA_Magreb">  ');
					listP($pays_USA);
					echo('
									</select>
									</div>
								</div>

								<!--SelectBasic-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="select basic">Indiquez votre forfait SOSH</label>
									<div class="col-md-5">
									<select id="selectbasic" name="forf" class="form-control">
										<option disabled selected>-- FORFAIT --</option>
										'); 
					listF( $forfait );
					echo('
									</select>
									</div>
								</div>

								<!--Button-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="sub">Envoyer</label>
									<div class="col-md-4">
										<button id="sub" name="sub" class="btn btn-success">OK!</button>
									</div>
								</div>
							</fieldset>
						</form>
					');
				}
				else{
					echo('<div id="iframe" class="col-sm-12">
							<iframe  src="http://travel.orange.fr/services_couverture.php?offre=10&destination_id=MAN&zone_code=1&ligne=dmgp" scrolling="no"></iframe>
						  </div>
					');


					etape("PREREQUIS", "Avant de partir n'oubliez pas :<br/> - de vérifier que vous disposez du mode international sur votre ligne en regardant dans votre espace client > mes options sinon vous n'aurez pas de réseau à l'étranger <br/>- d'initialiser le code secret de votre messagerie vocale (appel au 888, puis choix 2 et laissez vous guider).");
					
					etape("EXPLICATION FONCTIONNEMENT ETRANGER", "Ensuite, il faut savoir que pour toutes les personnes restées en France (votre famille / vos amis) qui envoient des SMS ou appellent un numéro français à l'étranger (vous), cela sera facturé comme d'habitude pour lui soit en général illimité pour les SMS voir les appels en fonction de leur forfait. Par contre sans option(s), la réception d'appels te sera facturée, la réception de SMS étant gratuite.");
					
					etape("EXPLICATIONS PRATIQUES <b>EN " . $_POST['pays'] . "</b>", "Pour appeler la France, je fais le + 33 6... (si j'appelle un n° commençant par 06 par exemple)
						Pour appeler en "  . $_POST['pays'] .  ", je fais le +$indicatif... suivi du n° local
						888 ou +33 6 08 08 08 08 la messagerie vocale
						444 ou #123# (appel gratuit depuis l'étranger) informations, options et pass'
					");
				}
			?>
			<div id="footer">
				<p class="text-info">Ce site n'est en aucun cas lié avec la société Orange et la marque Sosh.</p>
				<p class="text-info">ce site n'est en aucun cas lié avec la société Orange et la marque Sosh</p>
				<p class="text-info">Nous n'assumons aucune responsabilité de quelque nature que ce soit relativement à l'intégrité, pertinence, exactitude, qualité, entièreté, utilité ou même valeur de quelque contenu, data, document, graphique, image, information, idée, conseil, ou opinion que ce soit pouvant être contenu sur ce site.
				</p>
				<p class="text-info">Toute marque de commerce, tout logo et toute marque de services identifiant les produits et les services (collectivement appelés «marques») utilisés dans ce site sont des marques déposées et non déposées et appartiennent à leurs propriétaires respectifs.
				Aucun élément contenu dans ce site ne peut être interprété comme octroyé, c'est à dire que les « estoppels » ou autrement dit les licences ou droits d'usage de la marque, cités dans ce site ne peuvent être utilisés sans l'autorisation écrite du propriétaire des marques de fabrique parues dans ce site.		
				</p>
			</div>
		</div>
	</body>
</html>