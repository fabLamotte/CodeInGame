<?php
    // Variables
        fscanf(STDIN, "%d", $n);
        $inputs = explode(" ", fgets(STDIN));
        $positif = 5526;
        $negatif = -273;
        $nullPositif = true;
        $nullNegatif = true;
    
        /**
         * Si pas de températures
         */
            if($n == 0){                                    
                echo 0;
                return;
            }
    
        /**
         * Défilement des données d'entrée
         */
            for ($i = 0; $i < $n; $i++)                     
            {
                $t = intval($inputs[$i]);
                
                // Tri des données 
                    if($t > 0){                             // Si c'est une température positive
                        $nullPositif = false;
                        if($t < $positif){                  // si la valeur courante est plus proche de 0 que la valeur en mémoire
                            $positif = $t;                  // On modifie la valeur en mémoire
                        }
                    } else if ($t < 0) {                    // Si c'est une température négative
                        $nullNegatif = false;
                        if($t > $negatif){                  // si la valeur courante est plus proche de 0 que la valeur en mémoire
                            $negatif = $t;                  // On modifie la valeur en mémoire
                        }
                    }
            }

        /**
         * Gestion signe manquant
         */
            if($nullPositif){                               
                echo $negatif; 
            } else if ($nullNegatif){
                echo $positif;
            } else {        
                /**
                 *  Comparaison des valeurs 
                 */                                 
                    if($positif == -$negatif){
                        echo $positif;
                    } else if ($positif < -$negatif){
                        echo $positif; 
                    } else {
                        echo $negatif;
                    }
            }
?>