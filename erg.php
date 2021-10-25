<?php

require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
					

$fileWrite = 'GO';
$myFile = "anmeldungen.csv";
$myServer = 'http://URL_ZUR_ANWENDUNG/impfanmeldung';


$query = "SELECT * FROM coronaimpfung";
if (!$result = mysqli_query($db_link, $query)) {
    exit(mysqli_error($db_link));
}

$db_erg = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $db_erg[] = $row;
    }
}

//header('Content-Type: text/csv; charset=utf-8');
header('Content-Type: text/csv; charset=ANSI');
header('Content-Disposition: attachment; filename=Anmeldeliste_Corona_Impfung.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID', 'Name', 'Vorname', 'Strasse und Hausnummer', 'Postleitzahl', 'Ort', 'Geburtsdatum', 'private Handynummer', 'private Rufnummer', 'private Mail', 'dienstliche Rufnummer', 'dienstliche Mail', 'Organisationseinheit', 'Arbeitszeitmodell', 'Anmeldedatum'),';','"');

if (count($db_erg) > 0) {
    foreach ($db_erg as $row) {
		$row = array_map("utf8_decode", $row);
		fputcsv($output, $row,';','"');
    }
}

?>

