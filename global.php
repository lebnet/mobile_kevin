<?php
	$pays_EUROPE=array(
		'ACORES(LES)',	'ALAND(LESILES)','ALLEMAGNE','AUTRICHE', 'BALEARES(LES)', 'BELGIQUE', 'BULGARIE', 'CANARIES(ILES)',	'CHYPRE', 'CORFOU(ILE)',	'CRETE', 'CROATIE',	'CYCLADES(LES)','DANEMARKDESIRADE(ILEDELA)','ESPAGNE','ESTONIE', 'FEROE(ILES)',	'FINLANDE','FRANCE','GIBRALTAR','GRECE','GUADELOUPE(ILEDELA)','GUERNESEY','GUYANEFRANÇAISE', 'HONGRIE','IRLANDE','ISLANDE','ITALIE','JERSEY','LETTONIE','LIECHTENSTEIN','LITUANIE',
		'LUXEMBOURG','MADERE','MALTE(ILEDE)','MAN(ILEDE)','MARIE-GALANTE(ILE)','MARTINIQUE','MAYOTTE','NORVEGE','PAYS-BAS','POLOGNE','PORTUGAL','REP.TCHEQUE','REUNION','RHODES(ILE)','ROUMANIE','ROYAUME-UNI','SAINTPIERREETMIQUELON','SAINT-BARTHELEMY','SAINT-MARTIN(ILE)','SAINTES(ILES)','SANMARIN','SARDAIGNE','SICILE','SLOVAQUIES','LOVENIE','SUEDE','VATICAN');

	$pays_SA=array('ANDORRE','SUISSE');
	$pays_USA=array('ALGERIE','CANADA','ETATS-UNIS','HAWAII','MAROC','TUNISIE','TURQUIE',);

	function listP($A){
		foreach($A as $key){
			echo('<option>'.$key.'</option>');
		}
	}

	$forfait = array( '4,99', '9,99', '14,99', '19,99', '24,99', '+ livebox 29,99', '+ livebox 34,99', '+ livebox 44,99', '+ livebox 49,99' );

	function listF( $A ){
		foreach ($A as $key ) {
			echo('<option> - Forfait sosh à ' . $key . '</option>');
		}
	}

	function etape( $a, $b ){
		echo('
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">'. $a .'</h3>
		  </div>
		  <div class="panel-body">
		    '. $b .'
		  </div>
		</div>');
	}
?>