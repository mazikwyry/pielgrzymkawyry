<?$login="ministranci";$haslo="M@Z!K";
if ($_SERVER["PHP_AUTH_USER"]<>$login or $_SERVER["PHP_AUTH_PW"]<>$haslo) {
  header("WWW-Authenticate: Basic realm=\"Dane wpisuje tylko administrator\"\n");
  header("HTTP/1.0 401 Unauthorized\n");  
echo "Brak autoryzacji!";
echo "<br><a href=../index.htm>Powrót do strony głównej</a>";
  exit;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<title>tytuł</title></head><body>

<?
$plik_nazwa_tmp = $_FILES["plik1"]["tmp_name"];
$plik_nazwa_oryginalna = $_FILES["plik1"]["name"];
$plik_wielkosc = $_FILES["plik1"]["size"];

if (is_uploaded_file($plik_nazwa_tmp)) {
  echo "Plik <b>$plik_nazwa_oryginalna</b> ($plik_wielkosc) przesłany!";
  move_uploaded_file($plik_nazwa_tmp, "./$plik_nazwa_oryginalna");
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data"><div>
<input type="hidden" name="MAX_FILE_SIZE" value="120000" />
<input name="plik1" type="file" />
<input type="submit" value=" wy?lij " /> 
</div></form>

</body></html>

