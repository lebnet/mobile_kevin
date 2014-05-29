<?php
	$pays_EUROPE=array(
		'ACORES(LES)',	'ALAND(LESILES)','ALLEMAGNE','AUTRICHE', 'BALEARES(LES)', 'BELGIQUE', 'BULGARIE', 'CANARIES(ILES)',	'CHYPRE', 'CORFOU(ILE)','CRETE', 'CROATIE',	'CYCLADES(LES)','DANEMARK','DESIRADE(ILEDELA)','ESPAGNE','ESTONIE', 'FEROE(ILES)',	'FINLANDE','FRANCE','GIBRALTAR','GRECE','GUADELOUPE(ILEDELA)','GUERNESEY','GUYANEFRANÇAISE', 'HONGRIE','IRLANDE','ISLANDE','ITALIE','JERSEY','LETTONIE','LIECHTENSTEIN','LITUANIE',
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
			echo('<option> - Forfait sosh à ' . $key . ' €</option>');
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

	$GLOBALS['j'] = 0;
	function SSetape( $a, $b ){

		echo('<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="panel-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse'. $GLOBALS['j'] .'">' . $a . '</a>	
						</h4>
					</div>
					<div id="collapse'. $GLOBALS['j'] .'" class="panel-body collapse">
						<div class="panel-inner" style="text-align: justify;">
							'. $b .'
						</div>
					</div>
				</div>
		');
	}
?>