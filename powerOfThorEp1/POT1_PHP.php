<?php

    // Données d'entrée
    fscanf(STDIN, "%d %d %d %d",
        $lightX, // Position X de l'éclair
        $lightY, // Position Y de l'éclair
        $thorX, // Position X de départ de Thor
        $thorY // Position Y de départ de Thor
    );

    // Défilement des tour
        while (TRUE)
        {
            fscanf(STDIN, "%d", $remainingTurns);
            // Initialisation de variable des direction X et Y
                $directionX = '';
                $directionY = '';
            // Comparaison abscisse X
                if ($thorX > $lightX){
                    $directionX = 'W';
                    $thorX -= 1;
                } elseif($thorX < $lightX){
                    $thorX += 1;
                    $directionX = 'E';
                }
            // Comparaison abscisse Y 
                if ($thorY > $lightY){
                    $thorY -= 1;
                    $directionY = 'N';
                } elseif($thorY < $lightY){
                    $thorY += 1;
                    $directionY = 'S';
                }
            // Résultat
                echo ($directionY . $directionX . "\n");
        }
?>