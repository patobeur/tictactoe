<?php
session_start();
$_SESSION['a']="1";
?><!DOCTYPE>
<html>
    <head>
        <meta charset=utf-8" />
        <title>Zarbix Tic Tac Toe</title>
        <link href="ttt.css" rel="stylesheet" type="text/css">
        <?php
        include("tictactoe/ttt.php");
        $g_lcase="120";	// taille des cases en largeur (en x)
        $g_hcase="120";	// taille des cases en hauter (en y)
        ?>
        <style type="text/css">
        #jouer {<?php echo "height:".$g_lcase."px;width: ".$g_lcase."px;"; ?>
            border: 1px solid #063;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }
        </style>
    </head>

<body>
<?php
echo "Tic Tac Toe";
echo $bloc_ttt;
?>
</body>
</html>
