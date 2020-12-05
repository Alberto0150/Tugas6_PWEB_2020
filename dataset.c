#include <stdio.h>
#include <stdlib.h>

int main(){
    int i,j,k;
    for (i=0; i<60;i++)
    {
        k=1960 +i ;
        j = rand() % (100000000 + 1 - 200000) + 200000;
        printf("{ y: %d, label: \"%d\" }, \n", j,k);
    }
}