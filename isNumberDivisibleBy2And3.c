#include <stdio.h>
#include <stdlib.h>

int main()
{
    int number;
    printf("Type a number\n");
    scanf("%i",&number);
    if(number%2==0)
    {
        if(number%3==0)
        {
            printf("Number is divisible by 2 and 3");
        }
    }
    else
    {
        printf("Number is not divisible by 2 and 3");
    }
    return 0;
}
