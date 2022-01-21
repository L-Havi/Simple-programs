#include <stdio.h>
#include <stdlib.h>

int main()
{
    int number1, number2, GCD, R, done;
    done = 0;
    printf("Type 2 numbers to compare common divisor\n");
    scanf("%i%i",&number1, &number2);
    do
    {
        R = number1%number2;
        if(!R==0){
            number1 = number2;
            number2 = R;
        }else{
            done++;
        }
    }while(done == 0);
    GCD = number2;
    printf("Greatest common divisor is %i", GCD);
    return 0;
}
