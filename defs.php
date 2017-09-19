<?php include_once('name-wird-nicht-verraten.php');
if($sicherheitsvariable != 314159256) exit();

$anzgeb=12;		// so viele verschiedene Gebaeude gibt es
$anzerbauer=4;		// so viele davon produzieren Einheiten
$max_anzerbauer=4;	// wird noch erklaert

$geb_hq=1;			// Hauptquartier
$geb_mine1=2;		// Stahlwerk
$geb_mine2=3;		// Kunststofffabrik
$geb_mine3=4;		// Chemiefabrik
$geb_erbauer1=5;	// Kaserne
$geb_erbauer2=6;	// Fahrzeugfabrik
$geb_erbauer3=7;	// Panzerfabrik
$geb_erbauer4=8;	// Flugwerft
$geb_lager=9;		// Lager
$geb_af=10;		// Administrationsgebaeude
$geb_mauer=11;		// Sperranlagen
$geb_turm=12;		// Wachturmanlagen

$geb_namen=array(
 $geb_hq		=> 'Hauptquartier',
 $geb_mine1	=> 'Stahlwerk',
 $geb_mine2	=> 'Kunststofffabrik',
 $geb_mine3	=> 'Chemiefabrik',
 $geb_erbauer1	=> 'Kaserne',
 $geb_erbauer2	=> 'Fahrzeugfabrik',
 $geb_erbauer3	=> 'Panzerfabrik',
 $geb_erbauer4	=> 'Flugwerft',
 $geb_lager	=> 'Lager',
 $geb_ag		=> 'Administration',
 $geb_mauer	=> 'Sperranlagen',
 $geb_turm		=> 'Wachturmanlagen'
);

// Namen der Gebaeudebilder beginnen mit diesen Praefixen:
$geb_picprae=array(
 $geb_hq		=> 'g1',
 $geb_mine1	=> 'g3',
 $geb_mine2	=> 'g4',
 $geb_mine3	=> 'g5',
 $geb_erbauer1	=> 'g6',
 $geb_erbauer2	=> 'g8',
 $geb_erbauer3	=> 'g9',
 $geb_erbauer4	=> 'g10',
 $geb_lager	=> 'g14',
 $geb_ag		=> 'g25',
 $geb_mauer	=> 'g26',
 $geb_turm		=> 'g27'
);

?>
