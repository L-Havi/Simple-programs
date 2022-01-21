#include <stdio.h>
#include <stdlib.h>

int main()
{
    float first, second, result;
    char operation;
    printf("Type first number\n");
    scanf("%f",&first);
    printf("Type second number\n");
    scanf("%f",&second);

    printf("Type operator\n");
    scanf(" %c", &operation);

    switch(operation)
    {
    case '+':
        result = first + second;
        printf("%f + %f = %f",first,second,result);
        break;
    case '-':
        result = first - second;
        printf("%f - %f = %f",first,second,result);
        break;
    case '/':
        result = first / second;
        printf("%f / %f = %f",first,second,result);
        break;
    case '*':
        result = first * second;
        printf("%f * %f = %f",first,second,result);
        break;
    default:
        printf("Operator was wrong!");
        break;
    }
    return 0;
}
