<html>



<head>



</head>



<body>

<meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 2em;
        background-color: #fdfdff;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        div {
            margin: 0 auto;
            width: auto;
        }
    }
	
	.button {
		box-shadow:inset 0px 1px 0px 0px #d9fbbe;
		background:linear-gradient(to bottom, #b8e356 5%, #a5cc52 100%);
		background-color:#b8e356;
		border-radius:6px;
		border:1px solid #83c41a;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		padding:6px 24px;
		text-decoration:none;
		text-shadow:0px 1px 0px #86ae47;
	}
	.button:hover {
		background:linear-gradient(to bottom, #a5cc52 5%, #b8e356 100%);
		background-color:#a5cc52;
	}
	.button:active {
		position:relative;
		top:1px;
	}
	
		input[type=button], input[type=submit], input[type=reset] {
		background-color: #27428E;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
	
	#myInput {
		background-image: url('/css/searchicon.png');
		background-position: 10px 10px;
		background-repeat: no-repeat;
		width: 90%;
		font-size: 16px;
		padding: 12px 20px 12px 40px;
		border: 1px solid #ddd;
		margin-bottom: 12px;
	}

	#myTable {
		border-collapse: collapse;
		width: 100%;
		border: 1px solid #ddd;
		font-size: 18px;
	}

	#myTable th, #myTable td {
		text-align: left;
	padding: 12px;
	}

	#myTable tr {
		border-bottom: 1px solid #ddd;
	}

	#myTable tr.header, #myTable tr:hover {
		background-color: #f1f1f1;
	}
	
    </style>  

<div>
<img src="MEIN_LOGO.jpg" alt="Mein Logo" align=center>
<h1>Vormerkung zur Corona-Impfung</h1>
<p>Sie können hier die aktuelle Anmeldeliste herunterladen.</p>
<br/>
<?php
# Hier kann man das Passwort ändern
$passwort = "lassmichrein";

if (isset($_POST["go"])) {
 if ($_POST["name"] == $passwort) {
?>
<!-- hier könnt Ihr noch weiteren Text, Links, Bilder oder sonst etwas einbauen -->
<p>Download erfolgreich!</p>

<?php

$myServer = 'http://URL_ZUR_ANWENDUNG/impfanmeldung';

header('refresh: 1; url='.$myServer.'/erg.php');

?>


<?php
 }
 else {
  # Meldung bei einem falschen Passwort
 echo '<p><b><font color="red">Das Passwort ist falsch!</font></b><br><br>';
 echo '<a href="auswertung.php">zur erneuten Eingabe</a></p>';
 }
}
else
{
?>

<!-- Hier wird das Passwort gesendet -->
<form action="auswertung.php" method="post">
  <input type="Password" required placeholder="Passwort eingeben" name="name">
  <input type="Submit" name="go" value="Login">
</form>

<?php
}
?>

</div>
</body>
</html>