// dies geschieht innerhalb der INITS

$i=0;
$i++; $this->geb_hq=$i;			// Hauptquartier
$i++; $this->geb_mine1=$i;		// Stahlwerk
$i++; $this->geb_mine2=$i;		// Kunststofffabrik
$i++; $this->geb_mine3=$i;		// Chemiefabrik
$i++; $this->geb_lager=$i;		// Lager
$i++; $this->geb_bunker=$i;		// Bunker
$i++; $this->geb_markt=$i;		// Handelszentrum
$i++; $this->geb_unterkunft=$i;		// Unterkunft
$i++; $this->geb_erbauer1=$i;	// Kaserne
$i++; $this->geb_erbauer2=$i;	// Fahrzeugfabrik
$i++; $this->geb_erbauer3=$i;	// Panzerfabrik
$i++; $this->geb_erbauer4=$i;	// Flugwerft
$i++; $this->geb_platz=$i;		// Exerzierplatz
$i++; $this->geb_uni=$i;		// Universitaet
$i++; $this->geb_ag=$i;		// Administrationsgebaeude
$i++; $this->geb_mauer=$i;		// Sperranlagen
$i++; $this->geb_turm=$i;		// Wachturmanlagen

$this->anzgebs=$i;		// so viele verschiedene Gebaeude gibt es
$this->anzerbauer=4;		// so viele davon produzieren Einheiten
$this->max_anzerbauer=4;	// wird noch erklaert

$this->geb_namen=array(
 $this->geb_hq		=> 'Hauptquartier',
 $this->geb_mine1	=> 'Stahlwerk',
 $this->geb_mine2	=> 'Kunststofffabrik',
 $this->geb_mine3	=> 'Chemiefabrik',
 $this->geb_lager	=> 'Lager',
 $this->geb_bunker	=> 'Bunker',
 $this->geb_markt	=> 'Handelszentrum',
 $this->geb_unterkunft	=> 'Unterkunft',
 $this->geb_erbauer1	=> 'Kaserne',
 $this->geb_erbauer2	=> 'Fahrzeugfabrik',
 $this->geb_erbauer3	=> 'Panzerfabrik',
 $this->geb_erbauer4	=> 'Flugwerft',
 $this->geb_platz	=> 'Exerzierplatz',
 $this->geb_uni	=> 'Universität',
 $this->geb_ag		=> 'Administration',
 $this->geb_mauer	=> 'Sperranlagen',
 $this->geb_turm		=> 'Wachturmanlagen'
);

// Namen der Gebaeudebilder, klein; inkl. Pfad ab Hauptverzeichnis:
this->geb_pics40=array(
 $this->geb_hq		=> 'p/g3/40_1_hq.png',
 $this->geb_mine1	=> 'p/g3/40_1_stahlwerk.png',
 $this->geb_mine2	=> 'p/g3/40_1_kunststofffabrik.png',
 $this->geb_mine3	=> 'p/g3/40_1_chemiefabrik.png',
 $this->geb_lager	=> 'p/g3/40_1_lager.png',
 $this->geb_bunker	=> 'p/g3/40_1_leer.png',
 $this->geb_markt	=> 'p/g3/40_1_leer.png',
 $this->geb_unterkunft	=> 'p/g3/40_1_leer.png',
 $this->geb_erbauer1	=> 'p/g3/40_1_kaserne.png',
 $this->geb_erbauer2	=> 'p/g3/40_1_fahrzeugfabrik.png',
 $this->geb_erbauer3	=> 'p/g3/40_1_panzerfabrik.png',
 $this->geb_erbauer4	=> 'p/g3/40_1_flugwerft.png',
 $this->geb_platz	=> 'p/g3/40_1_leer.png',
 $this->geb_uni	=> 'p/g3/40_1_leer.png',
 $this->geb_ag		=> 'p/g3/40_1_administration.png',
 $this->geb_mauer	=> 'p/g3/40_1_sperranlagen.png',
 $this->geb_turm		=> 'p/g3/40_1_wachturmanlagen.png',
);

