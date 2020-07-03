using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic; 

class Solution
{
    static void Main(string[] args)
    {
        int n = int.Parse(Console.ReadLine()); 
        string[] inputs = Console.ReadLine().Split(' ');
        int resultTempP = 5526;
        int resultTempN = -273;
        bool nullP = true;
        bool nullN = true;

        /* Si aucune température n'est enregistrée */
            if(n == 0){
                Console.WriteLine("0");
                return;
            } 

        /* Tri des données */
            for (int i = 0; i < n; i++)
            {
                int t = int.Parse(inputs[i]);               // Valeur courrante                   
                if(t >= 0){                                 // Valeur positive          
                    nullP = false;
                    if(t <= resultTempP){                   
                        resultTempP = t;                    // Echange valeur en mémoire par valeur courrante
                    }
                } else {                                    // Valeur negative
                    nullN = false;
                    if(t >= resultTempN){                   
                        resultTempN = t;                    // Echange valeur en mémoire par valeur courrante
                    }
                }
            }

        /* Si un des signe manque */
            if(nullP){
                Console.WriteLine(resultTempN);
                return;
            } else if (nullN){
                Console.WriteLine(resultTempP);
                return;
            } else {
                /* Comparaison des valeurs */
                    if(resultTempP == -resultTempN){
                        Console.WriteLine(resultTempP);
                        return;
                    } else if(resultTempP > -resultTempN){
                        Console.WriteLine(resultTempN);
                        return;
                    } else if(resultTempP < -resultTempN){
                        Console.WriteLine(resultTempP);
                        return;
                    }
            }
    }
}