<?php
	class pays {
		var $nom;
		var $ind;

		function pays ($a, $b){
			$this->nom = $a;
			$this->ind = $b;
		}
	}
	$Pays = array();

	$fp = fopen("Pays","r"); //lecture
	while(!feof($fp)) {
		
		$Ligne = fgets($fp,255);
		if( !( $Ligne[0] == '/' ) ){
			$E = explode( "|" , $Ligne);
			array_push($Pays, new pays( rtrim($E[0]) , $E[1] ) );
		}
	}
	fclose($fp);

	//print_r($Pays);

	/*$pays_EUROPE	=	array(
		'acores (les)',	'aland (lesiles)','allemagne','autriche', 'baleares (les)', 'belgique', 'bulgarie', 'canaries (iles)',	'chypre', 'corfou (ile)','crete', 'croatie',	'cyclades (les)','danemark','desirade (iledela)','espagne','estonie', 'feroe (iles)',	'finlande','france','gibraltar','grece','guadeloupe (ile de la)','guernesey','guyanefrançaise', 'hongrie','irlande','islande','italie','jersey','lettonie','liechtenstein','lituanie',
		'luxembourg','madere','malte (ilede)','man (ilede)','marie-galante (ile)','martinique','mayotte','norvege','pays-bas','pologne','portugal','rep.tcheque','reunion','rhodes (ile)','roumanie','royaume-uni','saintpierreetmiquelon','saint-barthelemy','saint-martin (ile)','saintes (iles)','sanmarin','sardaigne','sicile','slovaquies','lovenie','suede','vatican');
	$pays_SA 		=	array('andorre','suisse');
	$pays_USA		=	array('algerie','canada','etats-unis','hawaii','maroc','tunisie','turquie',);*/

	function listP($A){
		/*foreach($A as $key){
			echo('<option>' . ucfirst($key) . '</option>');
		}*/
		foreach ($A as $i => $val) {
			echo('<option>' . $val->nom . '</option>');
		}
	}

	$forfait = array( '4,99', '9,99', '14,99', '19,99', '24,99', '+ livebox 29,99', '+ livebox 34,99', '+ livebox 44,99', '+ livebox 49,99' );

	function listF( $A ){
		foreach ($A as $key ) {
			echo('<option> Forfait Sosh à ' . ucfirst($key) . ' €</option>');
		}
	}

	$GLOBALS['i'] = 0;
	function etape( $a, $b ){
		$GLOBALS['i'] +=1;
		echo('
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="panel-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse'. $GLOBALS['i'] .'">' . $a . '</a>
					</h4>
				</div>
				<div id="collapse'. $GLOBALS['i'] .'" class="panel-body collapse">
					<div class="panel-inner" style="text-align: justify;">
						'. $b .'
					</div>
				</div>
			</div>
		');
	}

?>