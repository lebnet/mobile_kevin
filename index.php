<?php 	require('global.php'); 	?>
<!DOCTYPEHTML>
<html lang="fr">
	<?php require 'inc/head.php'; ?>

		<style>
			h1{
				text-align: center;
				font-size: 2.1em !important;
			}
			#iframeA{
				height: 105px;
				overflow: hidden;
				position: relative;
				width: 650px;
			}
			#iframA iframe{
				height: 1900px;
				left: -220px;
				position: absolute;
				top: -220px;
				width: 1080px;
			}
			#iframeB{
				height: 1005px;
				overflow: hidden;
				position: relative;
				width: 650px;
			}
		</style>
	<body>
		<div class="container col-lg-8 col-lg-offset-2">
			<div class="jumbotron">
				<h1>SoshTravel</h1>
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
										<optgroup label="Europe et DOM">
					');
					listP($Pays); 
					/*echo('	<optgroup label="Andorre et Suisse">  ');
					listP($pays_SA); 
					echo('	<optgroup label="USA ET">  ');
					listP($pays_USA);
					echo('	<optgroup label="RESTE DU MONDE">	<option value="Reste du monde">Reste du monde</option>  ');*/
					
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
										<button id="sub" name="sub" class="btn btn-success">Valider</button>
									</div>
								</div>
							</fieldset>
						</form>
					');
				}
				else{
						//print_r($Pays);
						foreach ($Pays as $k => $v) {
							//echo $v->nom . '<br>';
							//echo $_POST['pays'] . '<br>';
							if(	$v->nom == $_POST['pays'] ) {
								$indicatif = $v->ind;
							}
						}
					echo('	');

					echo('<div class="panel-body">
							<div class="panel-group">
							<h2>Tarifs pour un séjour à l\'étranger avec Sosh</h2>
					');


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
					
					etape("EXPLICATIONS PRATIQUES" , "Pour appeler la France, je fais le + 33 6... (si j'appelle un n° commençant par 06 par exemple)<br/>
														Pour appeler en <b>" . $_POST['pays'] . "</b>, je fais le <b>".	$indicatif	."</b>... suivi du n° local<br/>
														888 ou +33 6 08 08 08 08 la messagerie vocale<br/>
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
																				<div id="iframeA" class="col-sm-12">
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
																			."<p>La 4G vous accompagne dans plusieurs pays avec les partenaires d'Orange ! 
																			Les clients 4G d'Orange France ainsi que Sosh bénéficient d'ores et déjà de l'accès à la 4G en Espagne, 
																			au Portugal, au Royaume Uni, en Belgique, aux Pays Bas, au Luxembourg, en Suisse, en Italie, au 
																			Canada et en Corée du Sud. Bientôt, ils pourront également bénéficier de l'accès à la 4G en Allemagne.
																			</p>
																			<p>Le tarif pour utiliser la 4G à l'étranger est le même que celui de la 3G. 
																			Profiter du très haut débit mobile à l'étranger nécessite les mêmes conditions qu'en France 
																			  métropolitaine : il vous suffit d'avoir un terminal compatible, d'avoir une offre 4G/H+ et d'être sous c
																			  ouverture 4G.
																			</p>
																			<p>La 4G à l'étranger est disponible selon l'offre souscrite, la disponibilité d'un accord de roaming 4G 
																			  entre Orange SA et un opérateur partenaire, le support par le terminal du client des bandes de 
																			  fréquences LTE opérées par l'opérateur partenaire et la disponibilité de la couverture 4G de  
																			  l'opérateur partenaire.
																			</p>".'
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
																				<div id="iframeB" class="col-sm-12">
																					<iframe src="http://travel.orange.fr/services_compatibilite.php?offre=10&destination_id=DE&zone_code=1&ligne=dmgp&" scrolling="no"></iframe>
																				</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
					');
					
					etape('TARIFS PAR DEFAUT', 'a faire plus tard');

					echo('</div></div>');
					echo '<a href="index.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour</a>';
				}
			?>
			<div id="footer">
				<p class="text-info">Ce site n'est en aucun cas lié avec la société Orange et la marque Sosh.</p>
				<div class="row">
					<a href="ment.php"	class="btn btn-lg btn-info col-sm-4 col-sm-offset-4" target="_BLANK" ><span class="glyphicon glyphicon-info-sign"></span> Mentions légales</a>
				</div>
				<div class="row">
					<a href="http://boutique.orange.fr/doc/contrat3392.pdf" class="btn btn-lg btn-info col-sm-6 col-sm-offset-3" target="_BLANK" ><span class="glyphicon glyphicon-info-sign"></span> Fiche tarifaire des offres sosh</a>
				</div>
			</div>
		</div>
	</body>
</html>