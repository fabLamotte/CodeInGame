import java.util.*;
import java.io.*;
import java.math.*;
 
class Solution {
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();                       // Nombre de temperature
        int positive = 5526;
        int negative = -273;
        int pos = 0;
        int nev = 0;

        /* Si aucune température */
            if(n == 0){
                System.out.println(0);
                return;
            }

        /* Tri des données */
            for (int i = 0; i < n; i++) {
                int t = in.nextInt();               // Valeur courrante
                if(t < 0){                          // t est positif
                    nev++;
                    if(negative < t){ 
                        negative = t;               // On change la valeur de référence si t est plus proche de 0
                    }
                } else {                            // t est negatif
                    pos++;
                    if(positive > t){                
                        positive = t;               // On change la valeur de référence si t est plus proche de 0
                    }
                }
            }

        /* Si aucune valeur en positif / negatif */
            if(nev == 0){
                System.out.println(positive);
            } else if (pos == 0){
                System.out.println(negative);
            } else {
                /* Comparaison */
                    if(positive == -negative){
                        System.out.println(positive);
                    } else if(positive < -negative){
                        System.out.println(positive);
                    } else if(positive > -negative) {
                        System.out.println(negative);
                    }    
            }
    }
}