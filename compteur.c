    #include <stdio.h>
    #include <stdlib.h>
    #include <conio.h>
    #include <windows.h>
    int main()
    {
        int tps = 5;
       printf("Debut du jeux dans 5 secondes\n");
       while(tps > 0)
        {
            printf("%2d\b\b", tps);
            Sleep(1000);
            tps--;
        }
            if (tps == 0)
            {
                    printf("Jeu\n");
            }
        system("PAUSE");
    }
