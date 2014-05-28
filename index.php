<?php
	function listP($A){
		foreach($A as $key){
			echo('<option>'.$key.'</option>');
		}
	}

	$pays_EUROPE=array(
		'ACORES(LES)',	'ALAND(LESILES)','ALLEMAGNE','AUTRICHE', 'BALEARES(LES)', 'BELGIQUE', 'BULGARIE', 'CANARIES(ILES)',	'CHYPRE', 'CORFOU(ILE)',	'CRETE', 'CROATIE',	'CYCLADES(LES)','DANEMARKDESIRADE(ILEDELA)','ESPAGNE','ESTONIE', 'FEROE(ILES)',	'FINLANDE','FRANCE','GIBRALTAR','GRECE','GUADELOUPE(ILEDELA)','GUERNESEY','GUYANEFRANÇAISE', 'HONGRIE','IRLANDE','ISLANDE','ITALIE','JERSEY','LETTONIE','LIECHTENSTEIN','LITUANIE',
'LUXEMBOURG','MADERE','MALTE(ILEDE)','MAN(ILEDE)','MARIE-GALANTE(ILE)','MARTINIQUE','MAYOTTE','NORVEGE','PAYS-BAS','POLOGNE','PORTUGAL','REP.TCHEQUE','REUNION','RHODES(ILE)','ROUMANIE','ROYAUME-UNI','SAINTPIERREETMIQUELON','SAINT-BARTHELEMY','SAINT-MARTIN(ILE)','SAINTES(ILES)','SANMARIN','SARDAIGNE','SICILE','SLOVAQUIES','LOVENIE','SUEDE','VATICAN');

	$pays_SA=array('ANDORRE','SUISSE');
	$pays_USA=array('ALGERIE','CANADA','ETATS-UNIS','HAWAII','MAROC','TUNISIE','TURQUIE',);
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
			#logo{
				position: fixed;
				top:	0;
				left:	0;
				width:	10%;
			}
		</style>
	</head>
	<body>
		<div class="container col-lg-8 col-lg-offset-2">
			<div class="jumbotron">
				<h1>Tarifs pour un séjour à l'étranger avec Sosh</h1>
			</div>
			<img id="logo" src="http://t1.ftcdn.net/jpg/00/32/17/34/400_F_32173424_mEsqnM0aIso6Qs86HJc1OkeEvZn5GnAt.jpg"/>
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