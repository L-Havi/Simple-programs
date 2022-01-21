#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    char choice;
    float area;
    float perimeter;
    float radius;
    float length;
    float width;
    printf("Calculate rectangle or circle? R/C?");
    scanf("%c", &choice);
    switch(choice)
    {
        case 'C':
            radius;
            printf("Give radius\n");
            scanf("%f", &radius);
            area = M_PI * (radius*radius);
            perimeter = 2*radius*M_PI;
            printf("Area is %g cm\n", area);
            printf("Perimeter is %g cm\n", perimeter);
            break;
        case 'R':
            length;
            width;
            printf("Give rectangle width\n");
            scanf("%f", &width);
            printf("Give rectangle length\n");
            scanf("%f", &length);
            area = length*width;
            perimeter = (length*2)+(width*2);
            printf("Area is %g cm\n", area);
            printf("Perimeter is %g cm\n", perimeter);
            break;
        default:
            printf("Given character was not correct");
            break;
    }
    return 0;
}
