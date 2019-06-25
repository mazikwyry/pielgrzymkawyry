<?php 
	session_start();

if($_POST['login']=='stefan' || $_POST['login']=='Stefan' || $_POST['login']=='STEFAN' || $_POST['login']=='oazaadmin') {
    
    session_register("PASS");
		$_SESSION['PASS'] = 'stefan';
		}
?>

<!--HEADER-->
<?php require("config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<META HTTP-EQUIV="Creation-date" CONTENT="2002.03.16">
<META HTTP-EQUIV="Reply-to" CONTENT="adres zwrotny">
<META NAME="Description" CONTENT="opis dokumentu">
<META NAME="Author" CONTENT="autor dokumentu">
<META NAME="Generator" CONTENT="Zajączek 3.0">

<TITLE>Strona Joqusa</TITLE>
</HEAD>
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<script src="sample.js" type="text/javascript"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<BODY>
<!--/HEADER-->
<br /><br />
<table style="width:100%;">
<tr><td class="logo"><img src="logo2.png"></td></tr>
</table>

<center>
<table cellpadding=0 cellspacing=0 style="background-image:url(tlo_table.png); padding:40px;">


<tr>
<td><table cellpadding=0 cellspacing=0><tr>

<td valign=top>
<table cellpadding=0 cellspacing=0>

<tr>
<td class="menu">


&raquo;<a href="admin.php?link=news">                  Newsy</a> <br>
&raquo;<a href="admin.php?link=articles">              Artykuły</a> <br>
&raquo;<a href="admin.php?link=files">                   Pliki</a> <br>
&raquo;<a href="admin.php?link=pages">                   Strony</a> <br>
&raquo;<a href="admin.php?link=content">                   Treści</a> <br>
&laquo;<a href="index.php">                   Strona główna</a> <br>
 
 
</td></tr>
</table>
</td>
 <td width=20></td>

<td valign=top>
<table cellpadding=0 cellspacing=0>
<tr><td class="text">



<center>


<div class="hrr"><span style="color: #997802; font-size:25px; position: relative; right:47px; font-family:arial; letter-spacing:-1px; font-weight:bold;">Administracja</span></div>


<?php
 if(isset($_SESSION['PASS']) == TRUE) {
 echo 'Jestes zalogowany!  Po skończeniu prac musisz się <a href="wylogowywanie.php"><strong>wylogować</strong></a><br /><br />';

if($_GET['link']=='news')
{
		echo'<center><p style=" marign:0px; font-size:20px; font-family:arial; letter-spacing:-1px; font-weight:bold;" class="duzy">NEWS</p></center><br /><br /><div class=info style=" width:200px; overflow:hidden; float:right; margin-bottom:20px; margin-left:20px; padding-left:10px; border-left:1px solid gray;">';
		
		if($_POST['dodajn'])
		{
		$kto=$_POST['kto'];
		$title=$_POST['title'];
		$tresc=$_POST['tresc'];
		$admin=$_POST['admin'];
		if ($admin=='stefan'||$admin=='Stefan' || $admin=='oazaadmin')
			{
			
			if( is_uploaded_file( $_FILES['userfile']['tmp_name'] ) )
				{
				$sciezka = 'img/'.$_FILES['userfile']['name'];
				if( move_uploaded_file( $_FILES['userfile']['tmp_name'], $sciezka ) )
					{
						echo '<em>Obrazek dodany pomyślnie</em><br />';
						
					}
				}
			else
			{
    echo '<strong>Upload pliku nie powiódł się</strong><br />!';
			}
			

				$dodaj ="INSERT INTO news (id, tytul, tresc, autor, img, data) VALUES (NULL, '$title', '$tresc', '$kto', '$sciezka', NOW());";
				mysql_query($dodaj);
				echo'<em>News dodany pomyślnie :)</em><br />';
				}
		else
		echo'<em>Błędne hasło :(</em><br />';
		  }
		
			
		if($_GET['usunn'])
		{
		$id=$_GET['usunn'];
		$usun = "DELETE FROM news WHERE id='".$id."' LIMIT 1;";
		mysql_query($usun);
		echo '<em>Usunięto !</em><br />';

}	

	if ($_POST['editn'])
		{
		$txt=$_POST['txtt'];
		$id=$_POST['id'];
		$admin=$_POST['admin'];
		if ($admin=='stefan'||$admin=='Stefan' || $admin=='oazaadmin')
			{


		$dodaj = "UPDATE news SET tresc ='".$txt."' WHERE id = '".$id."';";
		mysql_query($dodaj);
		echo '<em>Zmiany zostały dokonane !!!</em><br />';
			}
			
			else echo'<em>Błędne hasło :(</em><br />';
		}
			
			
	if($_GET['edytujn'])	
	
	{
	$id=$_GET['edytujn'];
	
	$wypisz = "SELECT * FROM news WHERE id=".$id."";
		$wpisy = mysql_query($wypisz);
	
		while ($wynikrow = mysql_fetch_assoc($wpisy))
	{
	
	echo'
	<strong>EDYCJA NEWSA</strong> <br />
	
		<form method="post" name="kontakt" action="admin.php?link=news">
		<textarea id="text" class=mail style="height:200px;" name="txtt">'.$wynikrow['tresc'].'</textarea><br />
		<input type="hidden" name="id" value='.$id.'>
		Hasło:<br />
		<input type="password" name="admin" class=mail value=""><br />
		<input class="knefel2" name="editn" type="submit" value="Zmień" /></div>';
	
	}
	
	}
	
	else
	{
	
		
		echo' 
		<strong>DODAJ NEWS !</strong> <br />
		<form method="post" name="kontakt" action="admin.php?link=news" enctype="multipart/form-data">
		Nick:<br />
		<input type="text" name="kto" class=mail value=""><br />
		Tytuł:<br />
		<input type="text" name="title" class=mail value=""><br />
		News:<br />
		<textarea id="text" class=mail style="height:200px;" name="tresc"></textarea><br />
		Obrazek:
		<input name="userfile" type="file"/><br />
		Hasło:<br />
		<input type="password" name="admin" class=mail value=""><br />
		<input class="knefel2" name="dodajn" type="submit" value="Dodaj" />';
 }
 
 echo'</div>';
		
    $wypisz = "SELECT * FROM news ORDER BY data DESC";
		$wpisy = mysql_query($wypisz);
	
		while ($wynikrow = mysql_fetch_assoc($wpisy))

		{
			
			echo '
			<a style="margin:0px; float:right;" href="admin.php?link=news&usunn='.$wynikrow['id'].'">Usuń</a>
			<a style="margin:0px; float:right;" href="admin.php?link=news&edytujn='.$wynikrow['id'].'"> | Edytuj |</a>
			<div class="hrr2"><span style="color:white; overflow:hidden; margin:0px; font-size:15px; font-family:arial; letter-spacing:-1px; 						
			font-weight:bold;">  '.$wynikrow['tytul'].'</span></div><br />
			<span style="text-aling:left; color:gray; font-size:10px;">'.$wynikrow['autor'].', '.$wynikrow['data'].'</span>
			<br />'.$wynikrow['tresc'].'<br /><br />';

		}
		
		

	
	
}	





///////////////////////////////////////////////
////////////////////////////////////////////////
/////////////////////////////////////////////
////////////////////////////////////////////////////


if($_GET['link']=='articles')
{
		echo'<center><p style=" marign:0px; font-size:20px; font-family:arial; letter-spacing:-1px; font-weight:bold;" class="duzy">ARTYKUŁY</p></center><br /><br /><div class=info style=" overflow:hidden; width:600px;">';
		
		if($_POST['dodajn'])
		{
		$kto=$_POST['kto'];
		$title=$_POST['title'];
		$tresc=$_POST['txt'];
		$admin=$_POST['admin'];
		if ($admin=='stefan'||$admin=='Stefan' || $admin=='oazaadmin')
			{

				$dodaj ="INSERT INTO articles (id, tytul, tresc, autor, data) VALUES (NULL, '$title', '$tresc', '$kto', NOW());";
				mysql_query($dodaj);
				echo'<em>Artykuł dodany pomyślnie :)</em><br />';
				}
		else
		echo'<em>Błędne hasło :(</em><br />';
		  }
			
		if($_GET['usunn'])
		{
		$id=$_GET['usunn'];
		$usun = "DELETE FROM articles WHERE id='".$id."' LIMIT 1;";
		mysql_query($usun);
		echo '<em>Usunięto !</em><br />';

}	

	if ($_POST['editn'])
		{
		$txt=$_POST['txt'];
		$id=$_POST['id'];
		$admin=$_POST['admin'];
		if ($admin=='stefan'||$admin=='Stefan' || $admin=='oazaadmin')
			{


		$dodaj = "UPDATE articles SET tresc ='".$txt."' WHERE id = '".$id."';";
		mysql_query($dodaj);
		echo '<em>Zmiany zostały dokonane !!!</em><br />';
			}
			
			else echo'<em>Błędne hasło :(</em><br />';
		}
			
			
	if($_GET['edytujn'])	
	
	{
	$id=$_GET['edytujn'];
	
	$wypisz = "SELECT * FROM articles WHERE id=".$id."";
		$wpisy = mysql_query($wypisz);
	
		while ($wynikrow = mysql_fetch_assoc($wpisy))
	{
	
	echo'
	<strong>EDYCJA ARTYKUŁU</strong> <br />
	
		<form method="post" name="kontakt" action="admin.php?link=articles">
		<textarea id="text" class=mail name="txt">'.$wynikrow['tresc'].'</textarea><br />
		<input type="hidden" name="id" value='.$id.'>
		Hasło:<br />
		<input type="password" name="admin" class=mail value=""><br />
		<input class="knefel2" name="editn" type="submit" value="Zmień" /></div>';
	
	}
	
	}
	
	else
	{
	
		
		echo' 
		<strong>DODAJ ARTYKUŁ !</strong> <br />
		<form method="post" name="kontakt" action="admin.php?link=articles">
		Nick:<br />
		<input type="text" name="kto" class=mail value=""><br />
		Tytuł:<br />
		<input type="text" name="title" class=mail value=""><br />
		ARTYKUŁ:<br />
		<textarea id="text" rows=10 class=mail name="txt"></textarea><br />
		Hasło:<br />
		<input type="password" name="admin" class=mail value=""><br />
		<input class="knefel2" name="dodajn" type="submit" value="Dodaj" />';
 }
 
 echo'</div> <div style="clear:both;></div>"';
		
    $wypisz = "SELECT * FROM articles ORDER BY data DESC";
		$wpisy = mysql_query($wypisz);
		echo '<ul>';
		
		while ($wynikrow = mysql_fetch_assoc($wpisy))

		{
			
			echo '<li>'.$wynikrow['tytul'].'<br /><small><em>'.$wynikrow['autor'].', '.$wynikrow['data'].'</em></small>
			<br />
			[ <a float:right;" href="admin.php?link=articles&usunn='.$wynikrow['id'].'">Usuń</a> | 
			<a  href="admin.php?link=articles&edytujn='.$wynikrow['id'].'">Edytuj</a> ]
			';

		}
		echo '</ul>';
		

	
	
}

///////////////////////////////////////////////
////////////////////////////////////////////////
if($_GET['link']=='content')
{
	//wprowadzanie zmiany

	if ($_POST['submit'])
	{
	$txt=$_POST['txt'];
	$id=$_POST['id'];


	$dodaj = "UPDATE links SET content ='".$txt."' WHERE id = '".$id."';";
	mysql_query($dodaj);
	echo '<div class=info>Zmiany zostały dokonane !!!</div><br />';
	}

	
		//wypisanie promocji
	echo'<div style="text-align:left;">';
	$sql = "SELECT * FROM bookmarks;";
	$wpisy = mysql_query($sql);
	$ile0 = mysql_num_rows($wpisy);
			if($ile0>0)
	while ($wynikrow = mysql_fetch_assoc($wpisy)){

		echo '<div class=belka>&nbsp;<span style="font-face:arial; color: #a1dfa5;  letter-spacing:0; font-weight:bold;">'.$wynikrow['name'].'</span><br /></div>';
		
			$wypisz2 = "SELECT * FROM links WHERE bookmark=".$wynikrow['id'].";";
			$wpisy2 = mysql_query($wypisz2);
			$ile = mysql_num_rows($wpisy2);
			if($ile>0)
			while ($wynikrow2 = mysql_fetch_assoc($wpisy2)){

				echo '<li> <a href="admin.php?link=content&gdzie='. $wynikrow2['id'] .'">' . $wynikrow2['name'] .'</a>';
			}
			else
			echo'<li>brak stron w tej kategorii!';
		
		echo '</ul>';	
	}
	else
	echo'<center><div class="info">Brak kategorii w bazie</div></center>';
	
	

	//modyfikacja tekstu

	if (isset($_GET['gdzie']))
	{

	$gdzie = $_GET['gdzie'];

	$sql = "SELECT * FROM links WHERE id= ". $gdzie .";";
	$wpisy = mysql_query($sql);
	$wynikrow = mysql_fetch_assoc($wpisy);
	echo'<br /><br />';
	echo '<FORM ACTION="admin.php?link=content&gdzie='.$gdzie.'" METHOD="POST">';
	echo '<textarea cols="50" rows="20" name="txt">'.$wynikrow['content'].'</textarea>';
	echo '<input type="hidden" name="id" value='.$gdzie.'>';
	echo '<br><input type="submit" name="submit" value="Zmień"></FORM>';

	}
}
///////////////////////////////////////////////
////////////////////////////////////////////////
if($_GET['link']=='pages')
{
	//dodawanie linku

	if ($_POST['dodajlink'])
	{
	$kat=$_POST['kat'];
	$link=$_POST['link'];
	$opis=$_POST['opis'];

	$dodaj ="INSERT INTO links (id, bookmark, name, content) VALUES (NULL, '$kat','$opis','');";
	mysql_query($dodaj);
	echo '<div class="info">Link dodany !!!</div>';
	}


	//dodawanie kategorii

	if ($_POST['dodajkategorie'])
	{
	$kat=$_POST['kat'];

	$dodaj ="INSERT INTO bookmarks (id, name) VALUES (NULL, '$kat');";
	mysql_query($dodaj);
	echo '<div class="info">Kategoria dodana !!!</div>';
	}


	//usuwanie kategorii

	if ($_POST['usunkat'])
	{
	$id=$_POST['id'];

	$usun = "DELETE FROM bookmarks WHERE id='".$id."' LIMIT 1;";
	mysql_query($usun);
	echo '<div class="info">Kategoria usunięta</div>';
	}


	//usuwanie linku

	if ($_POST['usunlink'])
	{
	$id=$_POST['id'];

	$usun = "DELETE FROM links WHERE id='".$id."' LIMIT 1;";
	mysql_query($usun);
	echo '<div class="info">Link usunięty</div>';
	}

	//wprowadzanie zmiany linku

	if ($_POST['zmien_link'])
	{
	$opis=$_POST['opis'];
	$id=$_POST['id'];

	$dodaj = "UPDATE links SET  name ='$opis' WHERE id = '$id';";
	mysql_query($dodaj);
	echo '<div class="info">Zmiany zostały dokonane !!!</div>';
	}


	//wprowadzanie zmiany kategorii

	if ($_POST['zmien_kat'])
	{
	$kat=$_POST['kat'];
	$id=$_POST['id'];

	$dodaj = "UPDATE bookmarks SET name ='$kat' WHERE id = '$id';";
	mysql_query($dodaj);
	echo '<div class="info">Zmiany zostały dokonane !!!</div>';
	}

	//modyfikacja linku

	if (isset($_POST['edit_link']))
	{

	$edit_id = $_POST['id'];

	$sql = "SELECT links.* FROM links WHERE id='$edit_id';";
	$wpisy = mysql_query($sql);
	$wynikrow = mysql_fetch_assoc($wpisy);

	echo '<div class="info"><FORM ACTION="admin.php?link=pages" METHOD="POST">';
	echo 'Nazwa:<br>';
	echo '<input class=long value="'.$wynikrow['name'].'" name="opis">';
	echo '<input type="hidden" name="id" value='.$edit_id.'>';
	echo '<br><input type="submit" name="zmien_link" value="Zmień"></FORM></div>';
	}

	//modyfikacja kategorii

	if (isset($_POST['edit_kat']))
	{

	$edit_id = $_POST['id'];

	$sql = "SELECT bookmarks.* FROM bookmarks WHERE id='$edit_id';";
	$wpisy = mysql_query($sql);
	$wynikrow = mysql_fetch_assoc($wpisy);

	echo '<div class="info"><FORM ACTION="admin.php?link=pages" METHOD="POST">';
	echo 'Nazwa kategorii:<br>';
	echo '<input class=long value="'.$wynikrow['name'].'" name="kat">';
	echo '<input type="hidden" name="id" value='.$edit_id.'>';
	echo '<br><input type="submit" name="zmien_kat" value="Zmień"></FORM></div>';
	}


	echo '<br><br>';

	//wypisanie promocji
	echo'<div style="text-align:left;">';
	$sql = "SELECT * FROM bookmarks;";
	$wpisy = mysql_query($sql);
	$ile0 = mysql_num_rows($wpisy);
			if($ile0>0)
	while ($wynikrow = mysql_fetch_assoc($wpisy)){

		echo '<div class=belka>&nbsp;<span style="font-face:arial; color: #a1dfa5;  letter-spacing:0; font-weight:bold;">'.$wynikrow['name'].'';
		echo '<form action="admin.php?link=pages" method="POST">';
		echo '<input type=hidden  name="id" value="'.$wynikrow['id'].'"><input type="submit" style="width:70px;" name="usunkat" 
		value="Usuń kategorie"><input type="submit" name="edit_kat" value="Edytuj"></form></span></div><br /><ul>';
		
		

			$wypisz2 = "SELECT * FROM links WHERE bookmark=".$wynikrow['id'].";";
			$wpisy2 = mysql_query($wypisz2);
			$ile = mysql_num_rows($wpisy2);
			if($ile>0)
			while ($wynikrow2 = mysql_fetch_assoc($wpisy2)){

				echo '<li>'.$wynikrow2['name'];
				echo '<form action="admin.php?link=pages" method="POST">';
				echo '<input type=hidden  name="id" value="'.$wynikrow2['id'].'">
				<input type="submit" name="usunlink" value="Usuń link">
				<input type="submit" name="edit_link" value="Edytuj">
				</form>';
			
			
			}
			else
			echo'<li>brak stron w tej kategorii!';
		
		echo '</ul>';	
	}
	else
	echo'<center><div class="info">Brak kategorii w bazie</div></center>';


	echo'</div>';

	echo '
	<br><br>
	<div class="info">
	<strong>Dodaj podstrone:</strong><br><br>

	<form action="admin.php?link=pages" method="POST">
	Kategoria:<br><select name="kat">';
	

	$sql = "SELECT * FROM bookmarks;";
	$wpisy = mysql_query($sql);
	while ($wynikrow = mysql_fetch_assoc($wpisy)){
	echo'<option value="'.$wynikrow['id'].'">'.$wynikrow['name'].'</option>';
	}

	echo '</select><br >

	Nazwa: <br><input class=long name="opis"><br>
	<input type="submit" name="dodajlink" value="Dodaj">
  </form>

	</div>

	<br><br>
	<div class="info">
	<strong>Dodaj kategorie:</strong><br><br>
	<form action="admin.php?link=pages" method="POST">
	Nazwa kategorii: <br><input class=long name="kat"><br>
	<input type="submit" name="dodajkategorie" value="Dodaj">
	</form></div>';

}

/////////////////////////////////////////////
////////////////////////////////////////////////////


if($_GET['link']=='files')
{
		echo'<center><p style=" marign:0px; font-size:20px; font-family:arial; letter-spacing:-1px; font-weight:bold;" class="duzy">PLIKI</p></center><br /><br /><div class=info style="width:200px; overflow:hidden; float:right; margin-bottom:20px; margin-left:20px; padding-left:10px; border-left:1px solid gray;">';
		
		if($_POST['dodajn'])
		{
		$nazwa=$_POST['nazwa'];
		$admin=$_POST['admin'];
		if ($admin=='stefan'||$admin=='Stefan' || $admin=='oazaadmin')
			{

			if( is_uploaded_file( $_FILES['userfile']['tmp_name'] ) )
				{
      $sciezka = $_FILES['userfile']['name'];
			if( move_uploaded_file( $_FILES['userfile']['tmp_name'], $sciezka ) )
				{
					$dodaj ="INSERT INTO files (id, nazwa, sciezka, data) VALUES (NULL, '$nazwa', '$sciezka', NOW());";
					mysql_query($dodaj);
					echo '<em>Plik dodany !!</em><br />';
				}
			else
			{
    echo 'Upload pliku nie powiódł się!';
			}
		}
		else
		echo'<em>Błędne hasło :(</em><br />';
		  }
			
			
			}
			
			
		if($_GET['usunn'])
		{
		$id=$_GET['usunn'];
		$usun = "DELETE FROM files WHERE id='".$id."' LIMIT 1;";
		mysql_query($usun);
		echo '<em>Usunięto !</em><br />';

}	

	
	
		
		echo' 
		<strong>DODAJ PLIK</strong> <br />
		<form method="post" name="kontakt" action="admin.php?link=files" enctype="multipart/form-data">
	
		Nazwa:<br />
		<input type="text" name="nazwa" class=mail value=""><br />
		Plik:<br /> 
		<input name="userfile" type="file"/><br />
		Hasło:<br />
		<input type="password" name="admin" class=mail value=""><br />
		<input class="knefel2" name="dodajn" type="submit" value="Dodaj" />';
 
 echo'</div>';
		
    $wypisz = "SELECT * FROM files ORDER BY data DESC";
		$wpisy = mysql_query($wypisz);
		echo '<ul>';
		
		while ($wynikrow = mysql_fetch_assoc($wpisy))

		{
			
			echo '<li>'.$wynikrow['nazwa'].'<br /><small><em>'.$wynikrow['data'].'</em></small>
			<br />
			[ <a float:right;" href="admin.php?link=files&usunn='.$wynikrow['id'].'">Usuń</a>]
			';

		}
		echo '</ul>';
		

	
	
}

if(!$_GET['link'])
{
echo'<center><< Wybierz kategorie administracji w menu obok.</center>';





}

}
else
{
echo' 
		<form method="post" name="kontakt" action="admin.php" >
		Hasło:<br />
		<input type="password" name="login" class=mail value=""><br />
		<input class="knefel2" name="dodajn" type="submit" value="Zaloguj" />';



}


	?>
	
	
	
	
	<br>
<center>


<br><br>




</td></tr></table>

</td>

 </tr>

</table>
</td>
</tr>



</table>

 <div class="dol"><br />Copyright 2010 by oaza_św.rodziny | designed by Mazik</div>





</center>
	<script type="text/javascript">	
				
	     CKEDITOR.replace('txt');
				
			config.resize_maxWidth = 750;
	</script>
<!--FOOTER-->
</BODY>
</HTML>
<!--/FOOTER-->