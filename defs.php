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
$i++; $geb_unterkunft=$i;		// Unterkunft
$i++; $geb_erbauer1=$i;	// Kaserne
$i++; $geb_erbauer2=$i;	// Fahrzeugfabrik
$i++; $geb_erbauer3=$i;	// Panzerfabrik
$i++; $geb_erbauer4=$i;	// Flugwerft
$i++; $geb_platz=$i;		// Exerzierplatz
$i++; $geb_uni=$i;		// Universitaet
$i++; $geb_af=$i;		// Administrationsgebaeude
$i++; $geb_mauer=$i;		// Sperranlagen
$i++; $geb_turm=$i;		// Wachturmanlagen

$anzgebs=$i;		// so viele verschiedene Gebaeude gibt es
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
 $geb_unterkunft	=> 'Unterkunft',
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

// Namen der Gebaeudebilder, klein; inkl. Pfad ab Hauptverzeichnis:
$geb_pics40=array(
 $geb_hq		=> 'p/g3/40_1_hq.png',
 $geb_mine1	=> 'p/g3/40_1_stahlwerk.png',
 $geb_mine2	=> 'p/g3/40_1_kunststofffabrik.png',
 $geb_mine3	=> 'p/g3/40_1_chemiefabrik.png',
 $geb_lager	=> 'p/g3/40_1_lager.png',
 $geb_bunker	=> 'p/g3/40_1_leer.png',
 $geb_markt	=> 'p/g3/40_1_leer.png',
 $geb_unterkunft	=> 'p/g3/40_1_leer.png',
 $geb_erbauer1	=> 'p/g3/40_1_kaserne.png',
 $geb_erbauer2	=> 'p/g3/40_1_fahrzeugfabrik.png',
 $geb_erbauer3	=> 'p/g3/40_1_panzerfabrik.png',
 $geb_erbauer4	=> 'p/g3/40_1_flugwerft.png',
 $geb_platz	=> 'p/g3/40_1_leer.png',
 $geb_uni	=> 'p/g3/40_1_leer.png',
 $geb_ag		=> 'p/g3/40_1_administration.png',
 $geb_mauer	=> 'p/g3/40_1_sperranlagen.png',
 $geb_turm		=> 'p/g3/40_1_wachturmanlagen.png',
);
?>
