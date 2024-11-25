<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		echo "<h1>Podsumowanie:</h1>";
		echo "<p><strong>Imię:</strong> " . $_POST['imie'] . "</p>";
		echo "<p><strong>Data urodzenia:</strong> " . $_POST['data_urodzenia'] . "</p>";
		echo "<p><strong>Nazwisko:</strong> " .$_POST['nazwisko'] . "</p>";
		echo "<p><strong>Prawo jazdy:</strong> ";
		echo isset($_POST['tak']) ? 'Tak' : '';
		echo isset($_POST['nie']) ? 'Nie' : '';
		echo "</p>";
		echo "<p><strong>Ulica:</strong> " .$_POST['ulica'] . "</p>";
		echo "<p><strong>Hasło:</strong> " . $_POST['haslo'] . "</p>";
		echo "<p><strong>Numer domu:</strong> " . $_POST['dom'] . "</p>";
		echo "<p><strong>Płeć:</strong> ";
		echo isset($_POST['kobieta']) ? 'Kobieta ' : '';
		echo isset($_POST['mezczyzna']) ? 'Mężczyzna ' : '';
		echo isset($_POST['inna']) ? 'Inna ' : '';
		echo isset($_POST['niechce']) ? 'Nie podaję' : '';
		echo "</p>";
		echo "<p><strong>Numer mieszkania:</strong> " . $_POST['mieszkanie'] . "</p>";
		echo "<p><strong>Miasto:</strong> " . $_POST['miasto'] . "</p>";
		echo "<p><strong>Telefon:</strong> " . $_POST['telefon'] . "</p>";
		echo "<p><strong>Państwo:</strong> " . $_POST['panstwo'] . "</p>";
	}
	?>

    <h1>FORMULARZ</h1>

    <form method="POST" action="">
         <table style="width:80%">
	  <tr>
	  <td><label>Podaj imię:</label></td> <td><input type="text" name="imie"></td>
	  <td><label>Podaj datę urodzenia:</label></td> <td><input type="date" name="data_urodzenia"></td>
	  </tr>
	  
	  <tr>
	  <td><label>Podaj nazwisko:</label></td> <td><input type="text" name="nazwisko"></td>
	  <td><label>Czy posiadasz prawo jazdy?</label></td> <td><input type="checkbox" name="tak"><label for "tak">Tak</label>  <input type="checkbox" name="nie"><label for "nie">Nie</label> </td>
	  </tr>
	 
	   <tr>
	  <td><label>Podaj ulicę:</label></td> <td><input type="text" name="ulica"></td>
	  <td><label>Podaj hasło:</label></td> <td><input type="password" name="haslo"></td>
	  </tr>
	  
	  <tr>
	  <td><label>Podaj numer domu:</label></td> <td><input type="text" name="dom"></td>
	  <td><label>Podaj płeć:</label> <td><input type="checkbox" name="kobieta"><label for "kobieta">Kobieta</label>  <input type="checkbox" name="mezczyzna"><label for "mezczyzna">Mężczyzna</label> <br/> <input type="checkbox" name="inna"><label for "inna">Inna</label>  <input type="checkbox" name="niechce"><label for "niechce">Nie podaję</label> </td>
	  </tr>
	  
	  <tr>
	  <td><label>Podaj numer mieszkania:</label></td> <td><input type="number" name="mieszkanie"></td>
	  <td><label>Podaj miejsce zamieszkania (miasto):</label></td> <td><input type="text" name="miasto"></td>
	  </tr>
	  
	  <tr>
	  <td><label>Podaj telefon:</label></td> <td><input type="tel" name="telefon"></td>
	  <td><label>Podaj panstwo zamieszkania:</label></td> <td><input type="text" name="panstwo"></td>
	  </tr>
	  
	  </table>
	  
	  <br/><br/>
	  
	  <input type="submit" value="ZAPISZ">
	  
	  <br/><br/>
	  
	  <a href="tekst.txt">Podglad PHP</a>
    </form>
</body>
</html>

