<?php

function creationPanier ()
{
    if (!isset ($_SESSION['panier']))
    {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['Produits'] = array();
        $_SESSION['panier'] ['quantiteTotale'] = $_SESSION['panier'] ['montantTotal'] = 0;
    }
    return true;
}


function montantGlobal ()
{
    $total = 0;
    for ($i = 0; $i < count ($_SESSION['panier'] ['libelleProduit']); $i ++)
    {
        $total += $_SESSION['panier'] ['libelleProduit'] [$i] * $_SESSION['panier'] ['prixProduit'] [$i];
    }
    return $total;
}

function isVerrouille ()
{
    if (isset ($_SESSION ['panier']) && $_SESSION ['panier'] ['verrou'])
    {
        return true;  
    }
    else
    {
        return false;
    } 
}


function print_r_anbm($array, $type = 1, $title="", $sep="=>", $style="border:blue 1px solid;background-color:#eee;") {
	switch ($type) {
		case 1 :
			print "<pre>";
				print_r($array);
			print "</pre>";
			break;
		case 2 :
			print "<pre>";
				var_dump($array);
			print "</pre>";
			break;
		case 3 :
			print "<pre>";
				var_export($array);
			print "</pre>";
			break;
		case 4 :
			print "<table style='".$style."'>";
			print "<tr><td><font size=2><b><u>".$title."</u></b></td></tr>";
			if (isset($array) && count($array) > 0) {
				foreach($array as $key=>$val)
				{
					print "<tr><td><font size=2>".$key." ".$sep."</td><td><font size=2>";
					if ( is_array($array[$key]) )
					{
						print_r_anbm($array[$key], $type, "", $sep, $style);
						print "</td></tr>";
					}
					else
						print $val."</td></tr>";
				}
			}
			else {
				print "<tr><td>Que dalle !</td></tr>";
			}
			print "</table>";
			break;
		case 5 :
			br();
			if (isset($array) && count($array) > 0) {
				print " [";
				foreach($array as $key=>$val) {
					print '"'.$key.'"'.$sep;
					if ( is_array($array[$key]) ) {
						//print " Array [";
						print_r_anbm($array[$key], 5, "", $sep);
						print "<br>";
					}
					else
						print '"'.$val.'",&nbsp;';
				}
				print "],";
			}
			else {
				print "Que dalle !";
			}
			break;
		}
}


?>