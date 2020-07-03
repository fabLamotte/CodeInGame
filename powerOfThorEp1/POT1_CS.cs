using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic;

class Player
{
    static void Main(string[] args)
    {
        string[] inputs = Console.ReadLine().Split(' ');
        int lightX = int.Parse(inputs[0]);                          // Position X de l'éclair
        int lightY = int.Parse(inputs[1]);                          // Position Y de l'éclair
        int initialTx = int.Parse(inputs[2]);                       // Position X de départ de Thor
        int initialTy = int.Parse(inputs[3]);                       // Position Y de départ de Thor

        // Défilement des tour
        while (true)
        {
            int remainingTurns = int.Parse(Console.ReadLine());     // Tours restant
            String go = "";                                         // Direction à retourner à la fin du tour

                if(lightY > initialTy){                                 // Comparaison abscisse Y
                    go = "S";
                    initialTy++;
                } else if(lightY < initialTy){
                    go = "N";
                    initialTy--;
                }
                
                if(lightX > initialTx){                                 // Comparaison abscisse X
                    go += "E";
                    initialTx++;
                } else if(lightX < initialTx) {
                    go += "W";
                    initialTx--;
                }

            // Résultat
                Console.WriteLine(go);
        }
    }
}