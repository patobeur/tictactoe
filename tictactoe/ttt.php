<?php




$bloc_ttt="";
$g_lcase="120";	// taille des cases en largeur (en x)
$g_hcase="120";	// taille des cases en hauter (en y)
$pageindex="tictactoe.php";
if (isset($_SESSION['a'])){
	if ($_SESSION['a']==1) {$menu_ttt="<li class=\"ttton\"><a href=\"?a=2\"><img src=\"tictactoe/pieces/transp.gif\" width=\"".$g_lcase."\" height=\"".$g_hcase."\" alt=\"Arreter Tic Tac Toe\" title=\"Arreter Tic Tac Toe\"></a></li>";}
	else {$menu_ttt="<li class=\"tttoff\"><a href=\"?a=1\"><img src=\"tictactoe/pieces/transp.gif\" width=\"".$g_lcase."\" height=\"".$g_hcase."\" alt=\"Jouer &agrave; Tic Tac Toe\" title=\"Jouer &agrave; Tic Tac Toe\"></a></li>";}



//$_SESSION['a']=1;
if (isset($_SESSION['a'])){
	if ($_SESSION['a']==1) {
if (!isset($_SESSION['lavictoire'])) {$_SESSION['lavictoire']="0";}
// LA POSITION DES PIECES DES DEPART
$method="Post";
$player="0";
$g_case="3";	// n case max (en x comme en y)
$div1="";		// je vide $vid1 qui me servira a stocker le bloc html
$g_margecase="10";
$coups="0";
$coupsmax="8";
$vainqueur_1="Fin de partie<br><input type=\"submit\" name=\"restart\" class=\"submit1\" value=\"Encore ?\">";
$vainqueur_x="Bravo les X<br><input type=\"submit\" name=\"restart\" class=\"submit1\" value=\"Encore ?\">";
$vainqueur_o="Bravo les O<br><input type=\"submit\" name=\"restart\" class=\"submit1\" value=\"Encore ?\">";

$bloc_ttt="";



// -------------------- NOMBRE DE POINTS GAGNANTS -------------
$boucle="1";
$bin_vainqueur="7";
if (isset($_POST['restart']))
			{
			//echo "restart";
			// JE MET TOUT A ZERO
			$boucle_ligne="1";
			$_SESSION['lavictoire']="0";
			while ($boucle_ligne<=$g_case){
				$boucle_colone="1";
				while ($boucle_colone<=$g_case){
					//echo ya til quelquechose dans la case
					$case="case".$boucle_ligne.$boucle_colone;
					$$case="";
					unset($_POST[$case]);
					// ----------------------------------------------------------
					$boucle_colone++;
					}
				$boucle_ligne++;
				}
			unset($_POST['player'],$_POST['coups']);
			}

			// JE MET LA DERNIERE PIECES JOUER SUR LE PLATEAU
			$boucle_ligne="1";
			//echo "<br>";
			while ($boucle_ligne<=$g_case)
				{
				$boucle_colone="1";
				while ($boucle_colone<=$g_case)
					{
					//echo ya til quelquechose dans la case
					$case="case".$boucle_ligne.$boucle_colone;
					$jouercase="jouercase".$boucle_ligne.$boucle_colone;


							//echo ">".$case.",";
							//echo $jouercase."(".$_POST[$jouercase].")".".";

					if (isset($_POST[$case]) AND !isset($_POST[$jouercase])){
			//echo "(".$_POST[$case].")";
						$$case=$_POST[$case];}
					elseif (isset($_POST[$jouercase])){
			//echo "(".$_POST[$jouercase].")";
						$$case=$_POST[$jouercase];
						}
					elseif (!isset($_POST[$case]) AND !isset($_POST[$jouercase])){
						$$case="";}
					// ----------------------------------------------------------
					$boucle_colone++;
					}
				$boucle_ligne++;
				}
							//echo "<br>";




			// ------------------- VERIF VICTOIRE DES X ------------------
			if ($case11.$case12.$case13=="xxx"){$vainqueur="vainqueur_x";}
			elseif ($case21.$case22.$case23=="xxx"){$vainqueur="vainqueur_x";}
			elseif ($case31.$case32.$case33=="xxx"){$vainqueur="vainqueur_x";}

			elseif ($case11.$case21.$case31=="xxx"){$vainqueur="vainqueur_x";}
			elseif ($case12.$case22.$case32=="xxx"){$vainqueur="vainqueur_x";}
			elseif ($case13.$case23.$case33=="xxx"){$vainqueur="vainqueur_x";}

			elseif ($case11.$case22.$case33=="xxx"){$vainqueur="vainqueur_x";}
			elseif ($case13.$case22.$case31=="xxx"){$vainqueur="vainqueur_x";}
			//else {unset($vainqueur);}


			// -------------------- NOMBRE DE COUPS JOUER -------------
			if (isset($_POST['coups']))
				{
			//echo "coup jouer";
				$coups=$_POST['coups'];
				$coups++;
				if ($coups>$coupsmax)
					{$vainqueur="vainqueur_1";}
				}

			// ------------------- C A QUI DE JOUER ------------------

			if (!isset($vainqueur)) // si les X n'ont pas gagnés seulement
				{
				if (isset($_POST['player']))  // si les X ont joués seulement
				{

					if 	($_POST['player']=="x") {   // si les X ont joués seulement
			//echo "<br>joueur posté : ".$_POST['player'];
						include("tictactoe/ia.php");
						// ------------------- VERIF VICTOIRE DES O ------------------
						if ($case11.$case12.$case13=="ooo"){$vainqueur="vainqueur_o";}
						elseif ($case21.$case22.$case23=="ooo"){$vainqueur="vainqueur_o";}
						elseif ($case31.$case32.$case33=="ooo"){$vainqueur="vainqueur_o";}

						elseif ($case11.$case21.$case31=="ooo"){$vainqueur="vainqueur_o";}
						elseif ($case12.$case22.$case32=="ooo"){$vainqueur="vainqueur_o";}
						elseif ($case13.$case23.$case33=="ooo"){$vainqueur="vainqueur_o";}

						elseif ($case11.$case22.$case33=="ooo"){$vainqueur="vainqueur_o";}
						elseif ($case13.$case22.$case31=="ooo"){$vainqueur="vainqueur_o";}
					}
				}
				$player="x";
			}
			/*
			// ON LIS LES SCORES DANS LE FICHIER TEXTE
			$numligne="1";
			if (!$fp = fopen("victoires.txt","r"))
			{	echo "Echec de l'ouverture du fichier victoires.txt";exit;}
			else
			{	while(!feof($fp))
				{	// On stocke les variables
					$victoire1 = fgets($fp,3);
				}
				fclose($fp); // On ferme le fichier
				// On affiche la ligne
				$txt_victoire="Victoires : [x = ".$victoire1."] et ";
			}

			// ON LIS LES SCORES DANS LE FICHIER TEXTE
			if (!$fp2 = fopen("victoires2.txt","r"))
			{	echo "Echec de l'ouverture du fichier victoires.txt";exit;}
			else
			{	while(!feof($fp2))
				{	// On stocke les variables
					$victoire2 = fgets($fp2,3);
				}
				fclose($fp2); // On ferme le fichier
				// On affiche la ligne

				$txt_victoire.=" [o= ".$victoire2."]";
			}
			*/

			// JE RECONSTRUIT LE BLOC HTML
			$boucle_ligne="1";

			while ($boucle_ligne<=$g_case)
				{
			//echo "<br>---------------------------<br>";
				$boucle_colone="1";
				$divpos_y=($boucle_ligne-1)*$g_lcase;
				$divpos_y=$divpos_y+($boucle_ligne*$g_margecase);
				while ($boucle_colone<=$g_case)
					{
					$case="case".$boucle_ligne.$boucle_colone;
					$plop="jouercase".$boucle_ligne.$boucle_colone;
			//---
			//echo $case." =".$_POST[$$case]."/".$$case."<br>";
			//echo $plop." =".$_POST[$plop]."/".$$plop."<br>";
					$divpos_x=($boucle_colone-1)*$g_hcase;
					$divpos_x=$divpos_x+($boucle_colone*$g_margecase);
					// ----------------------------------------------------------
					$div1.= "\n		<div id=\"casebase".$boucle_colone.$boucle_ligne;
					$div1.="\" style=\"position:absolute; left:".$divpos_x."px;";
					$div1.=" top:".$divpos_y."px;";
					$div1.=" width:".$g_lcase."px;";
					$div1.=" height:".$g_hcase."px;";
					$div1.=" z-index:1\">\n";
					//$div1.="\n<table width=\"".$g_lcase."\" height=\"".$g_hcase;
					//$div1.="\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\"";
					//$div1.=" bgcolor=\"#999999\"><tr>\n<td bgcolor=\"#FFFFFF\">";
					// ----------------------------------------------------------
					$div1.="			<input name=\"".$case."\" type=\"hidden\" value=\"";
					if (isset($$case)) {$div1.=$$case;}
					$div1.="\" size=\"3\" maxlength=\"1\">\n";
					// ----------------------------------------------------------
					if (isset($$case))
						{
			//echo $$case."--<br>";
						if ($$case=="" AND !isset($vainqueur))
							{$div1.="			<input name=\"jouer".$case."\" id=\"jouer\" style=\"background-image: url(tictactoe/pieces/case".$case.".png);\" type=\"submit\" value=\"".$player."\">\n";}
						elseif ($$case=="" AND isset($vainqueur))
							{$div1.="";}
						else
							{$div1.="			<img src=\"tictactoe/pieces/".$$case.".png\" width=\"".$g_lcase."\" height=\"".$g_hcase."\">\n";}
						}

					// ----------------------------------------------------------
					//$div1.=$txt_case;
					//$div1.="</td>\n</tr></table>\n";
					$div1.="		</div>\n";
					// ----------------------------------------------------------
					$boucle_colone++;
					}
				$boucle_ligne++;
				}
			}
}

$bloc_ttt = ""; //$method;
$bloc_ttt.= "<div id=\"jeux\">\n";
$bloc_ttt.= "	<form name=\"form1\" method=\"".$method."";
$bloc_ttt.= "\" action=\"".$pageindex."\">\n";
$bloc_ttt.= "		<input name=\"player\" type=\"hidden\" id=\"player\" value=\"";
$bloc_ttt.= $player;
$bloc_ttt.= "\">\n";
$bloc_ttt.= "		<input name=\"coups\" type=\"hidden\" id=\"coups\" value=\"".$coups."\">\n";
$bloc_ttt.= $div1;

if (isset($vainqueur) AND isset($_SESSION['lavictoire'])){
	if ($_SESSION['lavictoire']!="1"){
		if ($vainqueur=="vainqueur_x"){$txt=$victoire1+1;$fichier="victoires.txt";}
		elseif ($vainqueur=="vainqueur_o"){$txt=$victoire2+1;$fichier="victoires2.txt";}
	}
	$bloc_ttt .= "			<div id=\"re\">\n	<input id=\"restart\" type=\"submit\" name=\"restart\" value=\"Recommencer\">\n</div>";
}
$bloc_ttt .= "	</form>\n</div>\n";
}
//echo $bloc_ttt;
?>