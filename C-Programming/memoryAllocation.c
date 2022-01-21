#include <stdio.h>
#include <stdlib.h>
int main(void)
{
int number;
int *ptr = NULL, *ptrNew = NULL;
int i = 1, j;
while(1)
{
// user input
printf("Please enter an integer number (-1 to exit the program)\n");
scanf("%d", &number);
if(number == -1)
break;
// reserve memory dynamically
ptrNew = realloc(ptr, i * sizeof(int));
// when memory allocation failes
if(ptrNew == NULL)
{
free((void *) ptr);
return 1;
}
ptrNew[i-1] = number;
i++;
ptr = ptrNew;
} // end of while loop
// print the content of the dynamic allocated
// memory
for(j = 0; j < (i-1); j++)
printf("\n%d ", ptrNew[j]);
printf("\n");
free(ptrNew);
return 0;
}
