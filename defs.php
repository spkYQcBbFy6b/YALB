<?php include_once('name-wird-nicht-verraten.php');
if($sicherheitsvariable != 314159256) exit();

$i=0;
$i++; $geb_hq=$i;			// Hauptquartier
$i++; $geb_mine1=$i;		// Stahlwerk
$i++; $geb_mine2=$i;		// Kunststofffabrik
$i++; $geb_mine3=$i;		// Chemiefabrik
$i++; $geb_lager=$i;		// Lager
$i++; $geb_bunker=$i;		// Bunker
$i++; $geb_markt=$i;		// Handelszentrum
$i++; $geb_erbauer1=$i;	// Kaserne
$i++; $geb_erbauer2=$i;	// Fahrzeugfabrik
$i++; $geb_erbauer3=$i;	// Panzerfabrik
$i++; $geb_erbauer4=$i;	// Flugwerft
$i++; $geb_platz=$i;		// Exerzierplatz
$i++; $geb_uni=$i;		// Universitaet
$i++; $geb_af=$i;		// Administrationsgebaeude
$i++; $geb_mauer=$i;		// Sperranlagen
$i++; $geb_turm=$i;		// Wachturmanlagen

$anzgeb=$i;		// so viele verschiedene Gebaeude gibt es
$anzerbauer=4;		// so viele davon produzieren Einheiten
$max_anzerbauer=4;	// wird noch erklaert

$geb_namen=array(
 $geb_hq		=> 'Hauptquartier',
 $geb_mine1	=> 'Stahlwerk',
 $geb_mine2	=> 'Kunststofffabrik',
 $geb_mine3	=> 'Chemiefabrik',
 $geb_lager	=> 'Lager',
 $geb_bunker	=> 'Bunker',
 $geb_markt	=> 'Handelszentrum',
 $geb_erbauer1	=> 'Kaserne',
 $geb_erbauer2	=> 'Fahrzeugfabrik',
 $geb_erbauer3	=> 'Panzerfabrik',
 $geb_erbauer4	=> 'Flugwerft',
 $geb_platz	=> 'Exerzierplatz',
 $geb_uni	=> 'Universität',
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
 $geb_lager	=> 'g14',
 $geb_bunker	=> 'n1',
 $geb_markt	=> 'n2',
 $geb_erbauer1	=> 'g6',
 $geb_erbauer2	=> 'g8',
 $geb_erbauer3	=> 'g9',
 $geb_erbauer4	=> 'g10',
 $geb_platz	=> 'n3',
 $geb_uni	=> 'n4',
 $geb_ag		=> 'g25',
 $geb_mauer	=> 'g26',
 $geb_turm		=> 'g27'
);

?>
