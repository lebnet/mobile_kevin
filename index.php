<?php
	require('global.php');
	function listP($A){
		foreach($A as $key){
			echo('<option>'.$key.'</option>');
		}
	}
?>
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
			<form class="form-horizontal" method="POST">
				<fieldset>
					<!--FormName-->
					<legend> Laissez vous guider...</legend>

					<!--SelectBasic-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="pays">Indiquez le pays de votre séjour</label>
						<div class="col-md-5">
						<select id="pays" name="pays" class="form-control">
							<?php
								listP($pays_EUROPE);
								listP($pays_SA);
								listP($pays_USA);
							?>
						</select>
						</div>
					</div>

					<!--SelectBasic-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="select basic">Indiquez votre forfait SOSH</label>
						<div class="col-md-5">
						<select id="selectbasic" name="forf" class="form-control">
							<option value="1">Optionone</option>
							<option value="2">Optiontwo</option>
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
			<div id="iframe" class="col-sm-12">
				<iframe  src="http://travel.orange.fr/services_couverture.php?offre=10&destination_id=MAN&zone_code=1&ligne=dmgp" scrolling="no"></iframe>
			</div>

			<div id="footer">
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