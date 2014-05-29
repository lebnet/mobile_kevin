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
					echo('
					');

					echo('<div class="panel-body">
							<div class="panel-group">');


					etape("PREREQUIS", "<h5>Avant de partir n'oubliez pas :</h5>  
										- de vérifier que vous disposez du mode international sur votre ligne en regardant dans votre 
										espace client > mes options sinon vous n'aurez pas de réseau à l'étranger.<br/>
										- d'initialiser le code secret de votre messagerie vocale (appel au 888, puis choix 2 et laissez 
										vous guider).<br/>
										- de  désactiver les  données  cellulaires  (internet)  sur votre portable  pour  éviter  tout  hors 
										forfait monstrueux  si vous ne prenez pas de pass internet ou n’avez de data en itinérance 
										incluse.
					");
					
					etape("EXPLICATION FONCTIONNEMENT ETRANGER", "Ensuite, il faut savoir que pour toutes les personnes restées en France (votre famille /vos
																amis) qui envoient des SMS ou appellent un numéro français à l'étranger (vous), cela sera 
																facturé  comme d'habitude pour lui soit en général illimité pour les SMS voir les appels en 
																fonction de leur forfait. Par contre sans option(s), la réception d'appels vous sera facturée, la 
																réception de SMS étant gratuite.
																");

					echo ("<h3><b> EN " . $_POST['pays'] . ":</b></h3>");
					
					etape("EXPLICATIONS PRATIQUES" , "Pour appeler la France, je fais le + 33 6... (si j'appelle un n° commençant par 06 par exemple)  
														Pour appeler en " . $_POST['pays'] . ", je fais le +indicatif... suivi du n° local  
														888 ou +33 6 08 08 08 08 la messagerie vocale  
														444 ou #123# (appel gratuit depuis l'étranger) informations, options et pass."
														.'<div class="panel-body">
															<div class="panel-group">
																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h4 class="panel-title">
																			<a class="panel-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse6">Couverture et services</a>	
																		</h4>
																	</div>
																	<div id="collapse6" class="panel-body collapse">
																		<div class="panel-inner" style="text-align: justify;">
																			iframe détourée comme celle-ci
																				<div id="iframe" class="col-sm-12">
																					<iframe  src="http://travel.orange.fr/services_couverture.php?offre=10&destination_id=MAN&zone_code=1&ligne=dmgp" scrolling="no"></iframe>
						  														</div>
																		</div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h4 class="panel-title">
																			<a class="panel-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse7">La 4G à l\'étranger</a>	
																		</h4>
																	</div>
																	<div id="collapse7" class="panel-body collapse">
																		<div class="panel-inner" style="text-align: justify;">'
																			."La 4G vous accompagne dans plusieurs pays avec les partenaires d'Orange ! 
																			Les clients 4G d'Orange France ainsi que Sosh bénéficient d'ores et déjà de l'accès à la 4G en Espagne, 
																			au Portugal, au Royaume Uni, en Belgique, aux Pays Bas, au Luxembourg, en Suisse, en Italie, au 
																			Canada et en Corée du Sud. Bientôt, ils pourront également bénéficier de l'accès à la 4G en Allemagne. 
																			Le tarif pour utiliser la 4G à l'étranger est le même que celui de la 3G. 
																			Profiter du très haut débit mobile à l'étranger nécessite les mêmes conditions qu'en France 
																			  métropolitaine : il vous suffit d'avoir un terminal compatible, d'avoir une offre 4G/H+ et d'être sous c
																			  ouverture 4G. 
																			La 4G à l'étranger est disponible selon l'offre souscrite, la disponibilité d'un accord de roaming 4G 
																			  entre Orange SA et un opérateur partenaire, le support par le terminal du client des bandes de 
																			  fréquences LTE opérées par l'opérateur partenaire et la disponibilité de la couverture 4G de  
																			  l'opérateur partenaire.".'
																		</div>
																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h4 class="panel-title">
																			<a class="panel-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse8">Compatibilité du téléphone</a>	
																		</h4>
																	</div>
																	<div id="collapse8" class="panel-body collapse">
																		<div class="panel-inner" style="text-align: justify;">
																			iframe (statique la par contre) détourée comme celle ci 
																				<div id="iframe" class="col-sm-12">
																					<iframe  src="http://travel.orange.fr/services_compatibilite.php?offre=10&destination_id=DE&zone_code=1&ligne=dmgp&" scrolling="no"></iframe>
																				</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
					');
					
					etape('TARIFS PAR DEFAUT', 'a faire plus tard');

					echo('</div></div>');
				}
			?>
			<div id="footer">
				<p class="text-info">Ce site n'est en aucun cas lié avec la société Orange et la marque Sosh.</p>
				<p class="text-info">Nous n'assumons aucune responsabilité de quelque nature que ce soit relativement à l'intégrité, pertinence, exactitude, qualité, entièreté, utilité ou même valeur de quelque contenu, data, document, graphique, image, information, idée, conseil, ou opinion que ce soit pouvant être contenu sur ce site.
				</p>
				<p class="text-info">Toute marque de commerce, tout logo et toute marque de services identifiant les produits et les services (collectivement appelés «marques») utilisés dans ce site sont des marques déposées et non déposées et appartiennent à leurs propriétaires respectifs.
				Aucun élément contenu dans ce site ne peut être interprété comme octroyé, c'est à dire que les « estoppels » ou autrement dit les licences ou droits d'usage de la marque, cités dans ce site ne peuvent être utilisés sans l'autorisation écrite du propriétaire des marques de fabrique parues dans ce site.		
				</p>
			</div>
		</div>
	</body>
</html>