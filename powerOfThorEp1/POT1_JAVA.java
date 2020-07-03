import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/
class Player {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int lightX = in.nextInt();                                  // Position X de l'éclair
        int lightY = in.nextInt();                                  // Position Y de l'éclair
        int initialTx = in.nextInt();                               // Position X de départ de Thor
        int initialTy = in.nextInt();                               // Position Y de départ de Thor

        // game loop
        while (true)
        {
            int remainingTurns = in.nextInt();                      // Tours restant
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
                System.out.println(go);
        }
    }
}