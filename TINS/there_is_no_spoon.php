<?php
/**
 * Don't let the machines win. You are humanity's last hope...
 **/

// $width: the number of cells on the X axis
fscanf(STDIN, "%d", $width);
// $height: the number of cells on the Y axis
fscanf(STDIN, "%d", $height);
$tab = [];
for ($i = 0; $i < $height; $i++)
{
    $line = stream_get_line(STDIN, 31 + 1, "\n");
    $tab[] = $line;
}
$result = "";
// Boucle sur les lignes
for($i = 0; $i < count($tab); $i++){
    // Eclatement de la ligne
        $eclatement = str_split($tab[$i]);
        $positionsX = array_keys($eclatement, "0");

        // Boucles sur les cellules de la ligne
        foreach($positionsX as $posX){
            $cellule_courrante = "";
            $cellule_droite = "";
            $cellule_basse = "";
            $cellule_basse_exist = false;

            // Position de la cellule courrante
            $cellule_courrante = $posX . ' ' . $i;
            $position_x_suivante = next($positionsX);

            // Position voisin de droite 
            if($position_x_suivante != null){
                $cellule_droite = $position_x_suivante . ' ' . $i; // Position voisin de droite
            } else {
                $cellule_droite = '-1 -1';  // Voisin de droite n'existe pas
            }


            // On boucle à nouveau sur les lignes suivantes pour le voisin du dessous
            for($a = $i+1; $a < count($tab); $a++){
                $eclatement2 = str_split($tab[$a]);
                
                // On passe à l'autre ligne si le voisin du dessous direct ne contient pas de cellule
                if($eclatement2[$posX] == "0"){
                    $cellule_basse_exist = true; 
                    $cellule_basse = $posX . ' ' . $a; // Position du voisin du dessous
                    break;
                }
            }

            if($cellule_basse_exist == false){
                $cellule_basse = '-1 -1';   // Voisin du dessous n'existe pas
            }

            $result = $cellule_courrante . ' ' . $cellule_droite . ' ' . $cellule_basse;
            echo $result . "\n";
        }
}

?>