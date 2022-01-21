#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    char firstString[20];
    char secondString[20];
    int result;
    printf("Type two strings\n");
    scanf("%s %s", firstString, secondString, 20);
    result = strcmp(firstString, secondString);
    if(!result)
        printf("Strings are equal\n");
    if(result)
        printf("Strings are not equal\n");
    return 0;
}
